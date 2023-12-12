<?php

namespace Padelea\vistas;

class VistaPartidas
{
    public static function render($partidas, $apodosPartidas)
    {
        include("cabecera.php");
        echo "
        <table class='table table-light'>
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Ciudad</th>
                    <th>Lugar</th>
                    <th>Pista Cubierta</th>
                    <th>Estado</th>
                    <th>Jugador 1</th>
                    <th>Jugador 2</th>
                    <th>Jugador 3</th>
                    <th>Jugador 4</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>";

        foreach ($partidas as $partida) {

            //Sacamos un array con los apodos de los jugadores de la partida


            echo "<tr>";
            echo " <td>" . $partida->getFecha() . "</td>";
            echo " <td>" . $partida->getHora() . "</td>";
            echo " <td>" . $partida->getCiudad() . "</td>";
            echo " <td>" . $partida->getLugar() . "</td>";
            if ($partida->getCubierto()) {
                echo "<td>Al aire libre</td>";
            } else {
                echo " <td>Bajo techo</td>";
            }
            ;
            if ($partida->getEstado()) {
                echo "<td>Partida Abierta</td>";

            } else {
                echo "<td><strong>Partida Cerrada</strong></td>";
            }
            if (strcmp($apodosPartidas[$partida->getIdPartida()][0], "Hueco libre") == 0) {
                echo "<td><strong style='color: green;'>Hueco libre</strong></td>";
            } else {
                echo " <td>" . $apodosPartidas[$partida->getIdPartida()][0] . "</td>";
            }
            ;
            if (strcmp($apodosPartidas[$partida->getIdPartida()][1], "Hueco libre") == 0) {
                echo "<td><strong style='color: green;'>Hueco libre</strong></td>";
            } else {
                echo " <td>" . $apodosPartidas[$partida->getIdPartida()][1] . "</td>";
            }
            ;
            if (strcmp($apodosPartidas[$partida->getIdPartida()][2], "Hueco libre") == 0) {
                echo "<td><strong style='color: green;'>Hueco libre</strong></td>";
            } else {
                echo " <td>" . $apodosPartidas[$partida->getIdPartida()][2] . "</td>";
            }
            ;
            if (strcmp($apodosPartidas[$partida->getIdPartida()][3], "Hueco libre") == 0) {
                echo "<td><strong style='color: green;'>Hueco libre</strong></td>";
            } else {
                echo " <td>" . $apodosPartidas[$partida->getIdPartida()][3] . "</td>";
            }
            ;
            echo "<td>";
            echo "<a href='index.php?accion=eliminarPartida&idPartida=" . $partida->getIdPartida() . "'><button
                                        class='btn btn-danger'>X</button>";
            echo "<a
                                        href='index.php?accion=recogerDatosNuevoRegalo&idPartida=" . $partida->getIdPartida() . "'><button
                                            class='btn btn-light border border-dark mx-2'>Editar</button>";
            echo "<a href='index.php?accion=detalle&idPartida=" . $partida->getIdPartida() . "'><button
                                                class='btn btn-info'>Detalle</button>";
            echo "</td>";
            echo "</tr>";


        }

        echo "</tbody>
                
        </table>";

        include("pie.php");
    }
}

?>