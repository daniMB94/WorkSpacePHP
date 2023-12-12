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

            ControladorAmigoInvisible::seleccionarTodosLosAmigosInvisibles();

            VistaAmigosInvisibles::render($amigosInvisibles);
        }
    } else {
        VistaInicio::render();
    }
}

?>