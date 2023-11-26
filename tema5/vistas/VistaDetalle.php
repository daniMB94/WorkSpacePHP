<?php
namespace regalosNavidad\vistas;

class VistaDetalle
{
    public static function render($enlaces, $idRegalo)
    {
        include("cabeceraPrincipal.php");
        ?>
        <div class="container">
            <div class="row justify-content-center">
                <div class='card col-6'>
                    <div class='card-header'>
                        Enlaces
                    </div>


                    <?php
                    if (sizeof($enlaces) > 0) {
                        echo "<ul class='list-group list-group-flush'>";
                        foreach ($enlaces as $enlace) {
                            echo "<li class='list-group-item row justify-content-around'><a href='https://" . $enlace->getUrl() . "' target='_blank'>" . $enlace->getUrl() . "</a> - PRECIO: " . $enlace->getPrecio() . "<a href='index.php?accion=eliminarEnlace&idEnlace=" . $enlace->getId() . "'><button class='btn btn-danger'>X</button></a></li>";


                        }
                        echo "</ul>";
                    } else {
                        echo "<p>No hay ningun enlace para este regalo </p>";

                    }

                    ?>

                </div>
            </div>
        </div>
        <a href="index.php?accion=nuevoEnlace&idRegalo=<?= $idRegalo ?>"><button type='submit' class='btn btn-success'>Insertar
                Enlace</button></a>
        <a href="index.php"><button type='submit' class='btn btn-light border border-dark mx-2'>Volver a la vista de regalos</button></a>


        <?php

        include("pie.php");
    }
}
?>