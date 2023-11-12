<?php

namespace regalosNavidad\vistas;

class VistaErrorRegistro{
    public static function render(){
        include("cabeceraPrincipal.php");
        include("errorRegistro.php");
        include("pie.php");
    }
}

?>