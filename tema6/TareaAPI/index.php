<?php

namespace ConsumirAPI;

use ConsumirAPI\Vistas\VistaInicio;
use ConsumirAPI\Vistas\VistaPelis;
use ConsumirAPI\Vistas\VistaDetalles;



//Autocargar clases
spl_autoload_register(function ($class) {
    //echo substr($class, strpos($class,"\\")+1);
    $ruta = substr($class, strpos($class, "\\") + 1);
    $ruta = str_replace("\\", "/", $ruta);
    include_once "./" . $ruta . ".php";
});
//Fin autocargar



$key = "api_key=a74c122b22807a76b7637ac1407a045e";

function conexionAPI($uri)
{

    $resultado = file_get_contents($uri, false);

    //Pasar de json a objeto php y recorrer los resultados
    if ($resultado != false) {
        $respPHP = json_decode($resultado);

        return $respPHP;

    }
}



if (isset($_REQUEST)) {
    if (isset($_REQUEST["accion"])) {
        if (strcmp($_REQUEST["accion"], "visualizarPelis") == 0) {
            $uri = "https://api.themoviedb.org/3/discover/tv?language=es&with_generes=Comedia,Misterio&with_original_language=en&page=2&" . $key;

            VistaPelis::render(conexionAPI($uri));

        }

        if (strcmp($_REQUEST["accion"], "detallesPeli") == 0) {
            $idPeli = $_REQUEST["idPeli"];

            $uri =

                VistaDetalles::render($idPeli);
        }

    } else {
        VistaInicio::render();
    }
}

?>