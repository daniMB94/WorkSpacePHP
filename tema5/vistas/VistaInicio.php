<?php

namespace regalosNavidad\vistas;

class VistaInicio
{

    public static function render()
    {
        include("cabeceraPrincipal.php");
        include("login.php");
        include("pie.php");
    }

}

?>