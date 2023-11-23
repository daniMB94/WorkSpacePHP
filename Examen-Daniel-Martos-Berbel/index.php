<?php


namespace incidencias;

use incidencias\Controlador\controladorIncidencias;

session_start();

//Autocargar clases
spl_autoload_register(function ($class) {
    //echo substr($class, strpos($class,"\\")+1);
    $ruta = substr($class, strpos($class, "\\") + 1);
    $ruta = str_replace("\\", "/", $ruta);
    include_once "./" . $ruta . ".php";
});
//Fin autocargar
if(isset($_REQUEST)){
    if(isset($_REQUEST["accion"])){
    
        if(strcmp($_REQUEST["accion"], "recogerDatosNuevaIncidencia&idIncidencia")) {
            
        }

        if(strcmp($_REQUEST["accion"], "borrarIncidencia" == 0)){
            $idIncidencia = $_REQUEST["idIncidencia"];

            controladorIncidencias::borrarIncidencia($idIncidencia);
        }

    } else {
        
        controladorIncidencias::mostrarIncidencias();
    }
}
?>