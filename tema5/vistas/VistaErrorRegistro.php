<?php

namespace regalosNavidad\vistas;

class VistaErrorRegistro
{
    public static function render()
    {
        include("cabeceraPrincipal.php");
        ?>
        <div class="alert alert-danger" role="alert">

            <form action="index.php" method="post">
                <p>Este usuario ya está registrado. <button type="submit" name="paginaPrincipal" class="alert alert-danger"
                        style="border: none"><a class="alert-link">Volver a la página principal</a></button></p>
            </form>
        </div>
        <?php
        include("pie.php");
    }
}

?>