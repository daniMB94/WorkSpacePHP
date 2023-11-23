<?php

namespace incidencias\Vista;

class vistaRecogidaDatosIncidencia
{
    public static function render($idIncidencia)
    {
        include("cabecera.php");
        ?>

        <form class="row justify-content-center p-4" action="index.php" method="post">

            <div class="col-md-6">
                <label for="latitud" class="form-label">Latitud</label>
                <input type="number" class="form-control" name="latitud">
            </div>
            <div class="col-md-6">
                <label for="longitud" class="form-label">Longitud</label>
                <input type="number" class="form-control" name="longitud">
            </div>
            <div class="col-md-6">
                <label for="ciudad" class="form-label">Ciudad</label>
                <input type="text" class="form-control" name="ciudad">
            </div>
            <div class="col-md-6">
                <label for="direccion" class="form-label">Direccion</label>
                <input type="number" class="form-control" name="direccion">
            </div>
            <div class="col-md-6">
                <label for="descripcion" class="form-label">Descripcion</label>
                <input type="number" class="form-control" name="descripcion">
            </div>
            <div class="col-md-6">
                <label for="solucion" class="form-label">Solucion</label>
                <input type="number" class="form-control" name="solucion">
            </div>
            <div class="col-md-6">
                <label for="estado" class="form-label">Estado</label>
                <input type="number" class="form-control" name="estado">
            </div>
            <!--SI LA VARIABLE IDINCIDENCIA NO ES NULL ENTONCES SE ENVÍA ESE IDINCIDENCIA PARA USARLO EN LA MODIFICACION DE LA INCIDENCIA-->
            <?php
            if (!is_null($idIncidencia)) {
                ?>
                <input type="hidden" name="idIncidencia" value="<?= $idIncidencia ?>">
                <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-2">
                    <button class="btn btn-success" type="submit" name="accion" value="modificarIncidencia">Enviar</button>
                </div>
                <?php
                //SI LA VARIABLE IDINCIDENCIA ES NULA ENTONCES SE ENVÍAN LOS DATOS SIN ID PARA CREAR LA NUEVA INCIDENCIA EN LA BBDD
            } else {
                ?>
                <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-2">
                    <button class="btn btn-success" type="submit" name="accion" value="nuevaIncidencia">Enviar</button>
                </div>
                <?php
            }
            ?>
        </form>



        <?php
        include("pie.php");
    }
}

?>