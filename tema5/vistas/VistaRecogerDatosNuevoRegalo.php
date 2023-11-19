<?php

namespace regalosNavidad\vistas;

class VistaRecogerDatosNuevoRegalo
{


    public static function render($idRegalo)
    {

        include("cabeceraPrincipal.php");

?>

        <form class="row justify-content-center p-4" action="index.php" method="post">

            <div class="col-md-6">
                <label for="categoria" class="form-label">Categoria</label>
                <input type="text" class="form-control" name="categoria">
            </div>
            <div class="col-md-6">
                <label for="nombre_articulo" class="form-label">Nombre del artículo</label>
                <input type="text" class="form-control" name="nombre_articulo">
            </div>
            <div class="col-md-6">
                <label for="quien_recibe" class="form-label">Quien lo va a Recibir</label>
                <input type="text" class="form-control" name="quien_recibe">
            </div>
            <div class="col-md-6">
                <label for="anio" class="form-label">Año</label>
                <input type="number" class="form-control" name="anio">
            </div>
            <!--SI LA VARIABLE IDREGALO NO ES NULL ENTONCES SE ENVÍA ESE ID REGALO PARA USARLO EN LA MODIFICACION DEL REGALO-->
            <?php
            if (!is_null($idRegalo)) {
            ?>
                <input type="hidden" name="idRegalo" value="<?= $idRegalo ?>">
                <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-2">
                    <button class="btn btn-success" type="submit" name="accion" value="modificarDatosRegalo">Enviar</button>
                </div>
            <?php
            //SI LA VARIABLE IDREGALO ES NULA ENTONCES SE ENVÍAN LOS DATOS SIN ID PARA CREAR UN NUEVO REGISTRO EN LA BBDD
            } else {
            ?>
                <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-2">
                    <button class="btn btn-success" type="submit" name="accion" value="enviarDatosNuevoRegalo">Enviar</button>
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