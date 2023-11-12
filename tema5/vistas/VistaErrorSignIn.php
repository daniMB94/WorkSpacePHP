<?php

namespace regalosNavidad\vistas;

class VistaErrorSignIn{
    public static function render(){
        include("cabeceraPrincipal.php");
        include("errorLogin.php");
        include("pie.php");
    }
}
?>