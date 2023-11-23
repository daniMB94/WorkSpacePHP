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
        /*Este método del controlador sirve tanto para modificar como para insertar una incidencia.
        Lo único que hace es redirigirnos a un formulario para introducir los datos de la nueva incidencia o
        introducir los datos de la modificaicón*/
        if(strcmp($_REQUEST["accion"], "recogerDatosNuevaIncidencia" == 0)){
            $idIncidencia = $_REQUEST["idIncidencia"];

            controladorIncidencias::modificar_o_nuevaIncidencia($idIncidencia);
        }
        /*Se usan los datos del formulario de para modificar la incidencia*/
        if(strcmp($_REQUEST["accion"], "modificarIncidencia" == 0)){
            $idIncidencia = $_REQUEST["idIncidencia"];
            $latitud = $_REQUEST["latitud"];
            $longitud = $_REQUEST["longitud"];
            $ciudad = $_REQUEST["ciudad"];
            $direccion = $_REQUEST["direccion"];
            $descripcion = $_REQUEST["descripcion"];
            $solucion = $_REQUEST["solucion"];
            $estado = $_REQUEST["estado"];

            controladorIncidencias::modificarIncidencia($idIncidencia, $latitud, $longitud, $ciudad, $direccion, $descripcion, $solucion, $estado);


        }

        /*Se usan los datos del formulario de para insertar la incidencia*/
        if(strcmp($_REQUEST["accion"], "nuevaIncidencia" == 0)){
            
        }

        

    } else {
        
        controladorIncidencias::mostrarIncidencias();
    }
}
?>