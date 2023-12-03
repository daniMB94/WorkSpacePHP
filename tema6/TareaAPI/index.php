<?php

namespace ConsumirAPI;

use ConsumirAPI\Vistas\VistaInicio;
use ConsumirAPI\Vistas\VistaPelis;



//Autocargar clases
spl_autoload_register(function ($class) {
    //echo substr($class, strpos($class,"\\")+1);
    $ruta = substr($class, strpos($class, "\\") + 1);
    $ruta = str_replace("\\", "/", $ruta);
    include_once "./" . $ruta . ".php";
});
//Fin autocargar



$key = "api_key=a74c122b22807a76b7637ac1407a045e";


$uri = "https://api.themoviedb.org/3/discover/tv?language=es&with_generes=Comedia,Misterio&with_original_language=en&page=2&" . $key;

$resultado = file_get_contents($uri, false);

//Pasar de json a objeto php y recorrer los resultados
if ($resultado != false) {
    $respPHP = json_decode($resultado);

}







if (isset($_REQUEST)) {
    if (isset($_REQUEST["accion"])) {
        if (strcmp($_REQUEST["accion"], "visualizarPelis") == 0) {

            VistaPelis::render($respPHP);

        }
    } else {
        VistaInicio::render();
    }
}

?>