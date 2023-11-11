<?php

namespace regalosNavidad;

use regalosNavidad\controladores\ControladorRegalosNavidad;


//Autocargar clases
spl_autoload_register(function ($class) {
    $ruta = substr($class, strpos($class, "\\") + 1);
    $ruta = str_replace("\\", "/", $ruta);
    include_once "./".$ruta.".php";
});
//Fin autocargar

if(isset($_REQUEST)) {

} else {
    //Mostrar inicio
    ControladorRegalosNavidad::mostrarInicio();
}

?>