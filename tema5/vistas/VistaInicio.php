<?php

namespace regalosNavidad\vistas;

class VistaInicio
{

    public static function render()
    {
        include("cabeceraPrincipal.php");
        include("signUp.php");
        include("pie.php");
    }

}

?>