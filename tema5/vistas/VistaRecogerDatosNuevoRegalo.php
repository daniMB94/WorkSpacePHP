<?php

namespace regalosNavidad\vistas;

class VistaRecogerDatosNuevoRegalo
{


    public static function render()
    {

        include("cabeceraPrincipal.php");

?>
        <form style="margin-top: 50px; margin-bottom: 50px" action="index.php" method="post">

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

            <button class="btn btn-success" type="submit" name="accion" value="enviarDatosNuevoRegalo">Enviar</button>
        </form>

<?php

        include("pie.php");
    }
}

?>