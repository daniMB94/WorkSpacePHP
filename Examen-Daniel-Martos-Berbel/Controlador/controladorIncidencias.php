<?php
namespace incidencias\Controlador;

use incidencias\Modelo\modeloIncidencias;
use incidencias\Vista\vistaIncidencias;
use incidencias\Vista\vistaRecogidaDatosIncidencia;



class controladorIncidencias{
    
    public static function mostrarIncidencias(){

        $incidencias = modeloIncidencias::consultarIncidencias();
        
        vistaIncidencias::render($incidencias);
    }
    public static function borrarIncidencia($idIncidencia){

        modeloIncidencias::borrarIncidencia($idIncidencia);
        header("location: index.php");

    }

    public static function modificar_o_nuevaIncidencia($idIncidencia){
        vistaRecogidaDatosIncidencia::render($idIncidencia);
    }

    public static function modificarIncidencia($idIncidencia, $latitud, $longitud, $ciudad, $direccion, $descripcion, $solucion, $estado){
        modeloIncidencias::actualizarIncidencia($idIncidencia, $latitud, $longitud, $ciudad, $direccion, $descripcion, $solucion, $estado);
    }
}

?>