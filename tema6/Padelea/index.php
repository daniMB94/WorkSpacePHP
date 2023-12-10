<?php

namespace Padelea;

use Padelea\controladores\ControladorJugador;
use Padelea\vistas\VistaPadelea;
use Padelea\vistas\VistaPartidas;

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
    if (isset($_REQUEST["accion"])) {

        if (strcmp($_REQUEST["accion"], "mostrarJugador") == 0) {


        }
        if (strcmp($_REQUEST["accion"], "login") == 0) {
            $apodo = $_REQUEST["apodo"];
            if (ControladorJugador::comprobarExistenciaJugador($apodo)) {
                $_SESSION["apodo"] = $apodo;
                VistaPartidas::render();
            } else {
                // VistaError::usuarioNoRegistradoRender();
                echo "ERROR";
            }
            ;

        }
        if (strcmp($_REQUEST["accion"], "cerrarSesion") == 0) {
            session_destroy();
        }
    } else {
        VistaPadelea::renderInicio();
    }
}

?>