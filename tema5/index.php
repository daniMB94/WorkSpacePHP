<?php


namespace regalosNavidad;

use regalosNavidad\controladores\ControladorRegalosNavidad;

session_start();

//Autocargar clases
spl_autoload_register(function ($class) {
    //echo substr($class, strpos($class,"\\")+1);
    $ruta = substr($class, strpos($class, "\\") + 1);
    $ruta = str_replace("\\", "/", $ruta);
    include_once "./" . $ruta . ".php";
});
//Fin autocargar



if (isset($_REQUEST)) {
    //Tratamiento de botones, forms, etc

    if (isset($_REQUEST["accion"])) {

        //CAPTURAMOS LOS VALORES DEL FORMULARIO PARA USARLOS
        if (strcmp($_REQUEST["accion"], "enviarDatosRegistro") == 0) {
            $nombre = $_REQUEST["nombre"];
            $nickname = $_REQUEST["nickname"];
            $passwordC = $_REQUEST["passwordC"];

            //COMPROBAR SI ESOS DATOS DE REGISTRO YA EXISTEN USANDO EL NICKNAME

            $confirmacionExistenciaPrevia = ControladorRegalosNavidad::comprobarExistenciaUsuario($nickname);
            //SI EXISTE EL NICKNAME MOSTRAMOS MENSAJE
            if ($confirmacionExistenciaPrevia) {
                ControladorRegalosNavidad::mostrarErrorRegistro();
            //SI NO EXISTE LO REGISTRAMOS EN LA BBDD Y MOSTRAMOS MENSAJE
            } else {
                ControladorRegalosNavidad::registroUsuarioBBDD($nombre, $nickname, $passwordC);

                ControladorRegalosNavidad::mostrarConfirmacionRegistro();
            }

                
        }

        //REDIRECCIONAR AL FORMULARIO DE REGISTRO
        if (strcmp($_REQUEST["accion"], "formularioRegistro") == 0) {
            ControladorRegalosNavidad::introducirDatosRegistro();

        }
        //CAPTURAMOS LOS VALORES DEL FORMULARIO PARA USARLOS Y COMPROBAMOS SI LAS CREDENCIALES SON CORRECTAS
        if (strcmp($_REQUEST["accion"], "signIn") == 0) {
            $nickname = $_POST["nickname"];
            $passwordC = $_POST["passwordC"];
         
            $autentificacionCorrecta = ControladorRegalosNavidad::comprobarCredenciales($nickname, $passwordC);
            //UNA VEZ SABEMOS QUE ESE NICKNAME Y CONTRASEÑA EXISTE Y SON CORRECTOS SACAMOS EL ID PARA MOSTRAR SUS REGALOS
            if($autentificacionCorrecta){

                $_SESSION["nickname"] = $nickname;

                $idUsuario = ControladorRegalosNavidad::idUsuario($nickname);

                ControladorRegalosNavidad::mostrarRegalosUsuario($idUsuario);
            //EN CASO DE NO TENER UNA AUTENTIFICACION CORRECTA MOSTRAMOS UN MENSAJE DE ERROR PARA REDIRIGIR AL FORMULARIO DE LOGIN
            } else {
                ControladorRegalosNavidad::mostrarError();
            }
           
        }
        if (strcmp($_REQUEST["accion"], "cerrarSesion") == 0) {
            ControladorRegalosNavidad::cerrarSesion();
        }
        //ELIMINA EL REGALO DE LA BBDD
        if (strcmp($_REQUEST["accion"], "eliminarRegalo") == 0) {
            $idRegalo = $_REQUEST['idRegalo'];
            ControladorRegalosNavidad::eliminarRegalo($idRegalo);
        }

        //ORDENA AL CONTROLADOR PINTAR EL FORMULARIO PARA RECOGER LOS DATOS DEL NUEVO REGALO
        if (strcmp($_REQUEST["accion"], "recogerDatosNuevoRegalo") == 0) {

            if (isset($_REQUEST['idRegalo'])) {
                $idRegalo = $_REQUEST['idRegalo'];//ESTA VARIABLE SE PASA CON EL ID DEL REGALO
            } else {
                $idRegalo = null;
            }
            ControladorRegalosNavidad::recogerDatosNuevoRegalo($idRegalo);
        }

        //ENVIA LOS DATOS DEL NUEVO REGALO AL CONTROLADOR PARA QUE ESTE ORDENE AL MODELO INSERTARLOS EN LA BBDD
        if (strcmp($_REQUEST["accion"], "enviarDatosNuevoRegalo") == 0) {

            
            $idUsuario = ControladorRegalosNavidad::idUsuario($_SESSION['nickname']);
            $categoria = $_POST["categoria"];
            $nombre_articulo = $_POST["nombre_articulo"];
            $quien_recibe = $_POST["quien_recibe"];
            $anio = $_POST["anio"];

            ControladorRegalosNavidad::enviarDatosNuevoRegalo($idUsuario, $categoria, $nombre_articulo, $quien_recibe, $anio);
            
        }

        //MODIFICA EL REGALO QUE TENGA EL ID CORRESPONDIENTE
        
        if (strcmp($_REQUEST["accion"], "modificarDatosRegalo") == 0) {
            $idRegalo = $_REQUEST['idRegalo'];
            $categoria = $_REQUEST['categoria'];
            $nombre_articulo = $_REQUEST['nombre_articulo'];
            $quien_recibe = $_REQUEST['quien_recibe'];
            $anio = $_REQUEST['anio'];

            ControladorRegalosNavidad::modificarRegalo($idRegalo, $categoria, $nombre_articulo, $quien_recibe, $anio);
        }

        if (strcmp($_REQUEST["accion"], "filtrar") == 0) {
            $anio = $_REQUEST["anio"];
            
            $idUsuario = ControladorRegalosNavidad::idUsuario($_SESSION["nickname"]);
            ControladorRegalosNavidad::obtenerRegalosPorAnio($anio, $idUsuario);
        }

        if (strcmp($_REQUEST["accion"], "detalle") == 0) {
            $idRegalo = $_REQUEST["idRegalo"];

            ControladorRegalosNavidad::consultarDetalle($idRegalo);
        }
        


    } else {
        //SI NO ESTÁ LOGUEADO MOSTRARÁ LA PAGINA PARA LOGUEARSE
        if (!isset($_SESSION["nickname"])) {
            //Mostrar inicio
        ControladorRegalosNavidad::mostrarInicio();
        //SI ESTÁ LOGUEADO DIRECTAMENTE MOSTRAMOS LA TABLA CON SUS REGALOS GUARDADOS
        } else {
            ControladorRegalosNavidad::mostrarRegalosUsuario(ControladorRegalosNavidad::idUsuario($_SESSION["nickname"]));
        }
        
    }


}
