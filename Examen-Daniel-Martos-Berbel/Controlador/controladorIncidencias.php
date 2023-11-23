<?php
namespace incidencias\Controlador;

use incidencias\Modelo\modeloIncidencias;
use incidencias\Vista\vistaIncidencias;


class controladorIncidencias{
    
    public static function mostrarIncidencias(){

        $incidencias = modeloIncidencias::consultarIncidencias();
        
        vistaIncidencias::render($incidencias);
    }
    public static function borrarIncidencia($idIncidencia){

        modeloIncidencias::borrarIncidencia($idIncidencia);
        header("location: index.php");

    }
}

?>