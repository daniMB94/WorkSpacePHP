<?php
namespace regalosNavidad\vistas;

class VistaNuevoEnlace
{
    public static function render($idRegalo)
    {
        include("cabeceraPrincipal.php");
        ?>
        <form action="index.php" method="post">
            <div class="col-md-6">
                <label for="url" class="form-label">Url</label>
                <input type="text" class="form-control" name="url">
            </div>
            <div class="col-md-6">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" class="form-control" name="precio">
            </div>
            <input type="hidden" name="idRegalo" value="<?= $idRegalo ?>">
            <button class="btn btn-success" type="submit" name="accion" value="enviarDatosNuevoEnlace">Enviar</button>
        </form>

        <?php

        include("pie.php");
    }
}
?>