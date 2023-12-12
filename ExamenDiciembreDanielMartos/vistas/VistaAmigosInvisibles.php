<?php

namespace AmigoInvisible\vistas;

class VistaAmigosInvisibles
{
    public static function render($amigosInvisibles)
    {
        include("cabecera.php");

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
                    <th>Participantes</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>";
        foreach ($amigosInvisibles as $amigoInvisible) {

            echo "<tr>";
            echo " <td>" . $amigoInvisible->getNombre() . "</td>";
            echo " <td>" . $amigoInvisible->getEstado() . "</td>";
            echo " <td>" . $amigoInvisible->getMaximo_dinero() . "</td>";
            echo " <td>" . $amigoInvisible->getFecha_tope() . "</td>";
            echo " <td>" . $amigoInvisible->getLugar() . "</td>";
            echo " <td>" . $amigoInvisible->getObservaciones() . "</td>";
            echo " <td>" . $amigoInvisible->getEmoji() . "</td>";
            echo "<td>";
            echo "<a
                                        href='index.php?accion=verParticipantes&idAmigoInvisible=" . $amigoInvisible->getId() . "'><button
                                            class='btn btn-light border border-dark mx-2'>Ver Participantes</button>";
            echo "</td>";
            echo "<td>";
            echo "<a href='index.php?accion=eliminarAmigoInvisible&idAmigoInvisible=" . $amigoInvisible->getId() . "'><button
                                        class='btn btn-danger'>X</button>";
            echo "<a href='index.php?accion=editar&idAmigoInvisible=" . $amigoInvisible->getId() . "'><button
                                                class='btn btn-info'>Editar</button>";
            echo "</td>";
            echo "</tr>";


        }

        echo "</tbody>
        </table>";


        include("pie.php");
    }
}

?>