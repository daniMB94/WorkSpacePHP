<?php

namespace Padelea;

use Padelea\controladores\ControladorJugador;
use Padelea\vistas\VistaPadelea;
use Padelea\controladores\ControladorPartida;


session_start();
//session_destroy();

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

        if (strcmp($_REQUEST["accion"], "login") == 0) {
            $apodo = $_REQUEST["apodo"];
            $passwordC = $_REQUEST["passwordC"];
            //Comprobamos que ese apodo existe en la base de datos

            //Mostramos todas las partidas y toda su información si el jugador existe en la BBDD y su contraseña es correcta
            $existe = ControladorJugador::comprobarExistenciaJugador($apodo, $passwordC);
            if ($existe) {

                ControladorPartida::todasLasPartidas();
            } else {

                VistaPadelea::renderInicio();
            }


        }
        if (strcmp($_REQUEST["accion"], "cerrarSesion") == 0) {
            ControladorJugador::cerrarSesion();
        }
        if (strcmp($_REQUEST["accion"], "eliminarPartida") == 0) {

            $idPartida = $_REQUEST["idPartida"];
            ControladorPartida::eliminarPartida($idPartida);
        }

        if (strcmp($_REQUEST["accion"], "detalle") == 0) {
            $idPartida = $_REQUEST["idPartida"];
            VistaDetalle::render($idPartida);
        }

    } else if (isset($_SESSION["jugador"])) {
        ControladorPartida::todasLasPartidas();
    } else {
        VistaPadelea::renderInicio();
    }
}

?>