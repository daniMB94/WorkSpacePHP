<?php

namespace AmigoInvisible\vistas;

class VistaParticipantesDeAmigoInvisible
{
    public static function render($amigoInvisible)
    {
        include("cabecera.php");
        echo "<div style='display: flex; flex-direction: column; justify-content: space-evenly; height: 100%'>";
        echo "<div style='text-align: center'><h1>AMIGO INVISIBLE SELECCIONADO</h1></div>";

        echo "
        <table class='table table-light'>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Estado</th>
                    <th>Presupuesto máximo</th>
                    <th>Fecha tope</th>
                    <th>Lugar</th>
                    <th>Observaciones</th>
                    <th>Emoji</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>";
        echo "<tr>";
        echo " <td>" . $amigoInvisible->getNombre() . "</td>";
        echo " <td>" . $amigoInvisible->getEstado() . "</td>";
        echo " <td>" . $amigoInvisible->getMaximo_dinero() . "</td>";
        echo " <td>" . $amigoInvisible->getFecha_tope() . "</td>";
        echo " <td>" . $amigoInvisible->getLugar() . "</td>";
        echo " <td>" . $amigoInvisible->getObservaciones() . "</td>";
        echo " <td>" . $amigoInvisible->getEmoji() . "</td>";
        echo " <td><a href='index.php?aniadirParticipante&idAmigoInvisible=" . $amigoInvisible->getid() . "'><button
            class='btn btn-info'>Añadir Participante</button></td>";
        echo "</tr>";
        echo "</tbody>
        </table>";

        echo "
        <table class='table table-light'>
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Nombre</th>
                    <th>Telefono</th>

                </tr>
            </thead>
            <tbody>";

        echo "<div style='text-align: center'><h1>PARTICIPANTES DEL AMIGO INVISIBLE</h1></div>";

        foreach ($_SESSION["participantes"] as $participante) {
            $participanteAmigoInvisible = unserialize($participante);
            echo "<tr>";
            echo " <td>" . $participanteAmigoInvisible->getNombre() . "</td>";
            echo " <td>" . $participanteAmigoInvisible->getEmail() . "</td>";
            echo " <td>" . $participanteAmigoInvisible->getTelefono() . "</td>";
            echo "</tr>";
        }

        echo "</tbody>
        </table>";

        echo "</div>";

        include("pie.php");
    }
}

?>