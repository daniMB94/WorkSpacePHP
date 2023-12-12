<?php

namespace AmigoInvisible;

use AmigoInvisible\vistas\VistaInicio;
use AmigoInvisible\controladores\ControladorAmigoInvisible;


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

        if (strcmp($_REQUEST["accion"], "entrar") == 0) {
            //inicializamos el valor true a la clave "activo" y lo guardamos en la sesión para añadir un botón de salir a la cabecera
            $_SESSION["activo"] = true;
            ControladorAmigoInvisible::seleccionarTodosLosAmigosInvisibles();
        }

        if (strcmp($_REQUEST["accion"], "salir") == 0) {
            ControladorAmigoInvisible::salir();
        }

        if (strcmp($_REQUEST["accion"], "verParticipantes") == 0) {
            $idAmigoInvisible = $_REQUEST["idAmigoInvisible"];

            ControladorAmigoInvisible::verParticipantes($idAmigoInvisible);

        }

        if (strcmp($_REQUEST["accion"], "eliminarAmigoInvisible") == 0) {
            $idAmigoInvisible = $_REQUEST["idAmigoInvisible"];
            ControladorAmigoInvisible::eliminarAmigoInvisible($idAmigoInvisible);
        }

    } else {
        VistaInicio::render();
    }
}

?>