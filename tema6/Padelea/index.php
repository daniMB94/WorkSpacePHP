<?php

namespace Padelea;

spl_autoload_register(function ($class) {
    $ruta = substr($class, strpos($class, "\\") + 1);
    $ruta = str_replace("\\", "/", $ruta);
    include_once "./" . $ruta . ".php";
});


if (isset($_REQUEST)) {
    if (isset($_REQUEST["accion"])) {
        if (strcmp($_REQUEST["accion"], "")) {

        }
    }
}

?>