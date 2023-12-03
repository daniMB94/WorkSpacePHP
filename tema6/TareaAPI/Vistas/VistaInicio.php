<?php

namespace ConsumirAPI\Vistas;

class VistaInicio
{

    public static function render()
    {
        include("cabecera.php");

        echo "<div class=container>";
        echo "<a href=index.php?accion=visualizarPelis><button class=btn-success>Ver las pelis</button></a>";
        echo "</div>";

        include("pie.php");
    }


}

?>