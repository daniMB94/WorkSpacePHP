<?php

namespace AmigoInvisible\vistas;

class VistaInicio
{
    public static function render()
    {
        include("cabecera.php");

        ?>

        <div style="display: flex; flex-direction: row; justify-content:center">
            <a href="index.php?accion=entrar"><button class="btn btn-success"
                    style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">
                    <h1>ENTRAR</h1>
                </button></a>
        </div>

        <?php

        include("pie.php");
    }
}

?>