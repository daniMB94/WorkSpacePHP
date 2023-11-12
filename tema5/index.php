<?php

namespace regalosNavidad;

use regalosNavidad\controladores\ControladorRegalosNavidad;


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

        if (strcmp($_REQUEST["accion"], "enviarDatosRegistro") == 0) {
            $nombre = $_REQUEST["nombre"];
            $nickname = $_REQUEST["nickname"];
            $passwordC = $_REQUEST["passwordC"];

            $confirmacionExistenciaPrevia = ControladorRegalosNavidad::comprobarExistenciaUsuario($nickname);

            if ($confirmacionExistenciaPrevia) {
                echo "<h4>Este usuario ya existe en la BBDD</h4>";
            } else {
                ControladorRegalosNavidad::registroUsuarioBBDD($nombre, $nickname, $passwordC);

                ControladorRegalosNavidad::mostrarConfirmacionRegistro();
            }

                
        }

        if (strcmp($_REQUEST["accion"], "registrarse") == 0) {
            ControladorRegalosNavidad::introducirDatosRegistro();

        }



    } else {
        //Mostrar inicio
        ControladorRegalosNavidad::mostrarInicio();
    
    }


}


?>