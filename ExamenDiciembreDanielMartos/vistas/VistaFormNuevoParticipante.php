<?php

namespace AmigoInvisible\vistas;


class VistaFormNuevoParticipante
{
    public static function render($idAmigoInvisible)
    {
        include("cabecera.php");

        ?>

        <p>No me da tiempo a más, Habría que recoger los datos en el form y realizar una consulta de tipo "insert" en la bbdd
            valiéndose del idAmigoInvisible</p>

        <?php

        include("pie.php");
    }
}

?>