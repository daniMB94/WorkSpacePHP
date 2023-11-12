<?php

namespace regalosNavidad\vistas;

class VistaInicio
{

    public static function render()
    {
        include("cabeceraPrincipal.php");
        include("paginaPrincipal.php");
        include("pie.php");
    }

}
