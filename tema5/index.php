<?php


namespace regalosNavidad;

use DeepRacer\controladores\ControladorDeepRacer;
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

                $_SESSION['nickname'] = $nickname;

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
        //POR IMPLEMENTAR EN LA CLASE MODELOREGALOSNAVIDAD
        if (strcmp($_REQUEST["accion"], "eliminarRegalo") == 0) {
            $idRegalo = $_REQUEST['idRegalo'];
            ControladorRegalosNavidad::eliminarRegalo($idRegalo);
        }

        //POR IMPLEMENTAR
        if (strcmp($_SESSION['accion'], "insertarRegalo") == 0) {
            ControladorRegalosNavidad::insertarRegalo();
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
