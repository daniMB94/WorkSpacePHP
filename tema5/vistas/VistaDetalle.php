<?php
namespace regalosNavidad\vistas;

class VistaDetalle
{
    public static function render($enlaces)
    {
        include("cabeceraPrincipal.php");

        echo "<div class='row'>";

        echo "<div class='col-4'>";
        echo "<div class='card' style='width: 18rem;''>";
        echo "<div class='card-header'>";
        echo "Enlaces";
        echo "</div>";   
        echo "<ul class='list-group list-group-flush'>";

        foreach($enlaces as $enlace) {
            echo "<li class='list-group-item'><a href='". $enlace->getUrl(). "'>". $enlace->getUrl(). "</a> - PRECIO: ". $enlace->getPrecio(). "</li>";
        }

        echo "</ul>";
        echo "</div>";

        echo "<div class='col-8'>";


        echo "</div>";

        echo "</div>";

        include("pie.php");
    }
}
?>
<a href=""></a>