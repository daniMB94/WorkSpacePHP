<?php

namespace Padelea\vistas;

class VistaPartidas
{
    public static function render($partidas)
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

                </tr>
            </thead>
            <tbody>";

        foreach ($partidas as $partida) {


            echo "<tr>";
            echo " <td>" . $partida->getFecha() . "</td>";
            echo " <td>" . $partida->getHora() . "</td>";
            echo " <td>" . $partida->getCiudad() . "</td>";
            echo " <td>" . $partida->getLugar() . "</td>";
            echo " <td>" . $partida->getCubierto() . "</td>";
            echo " <td>" . $partida->getEstado() . "</td>";
            echo " <td>" . $partida->getIdj1() . "</td>";
            echo " <td>" . $partida->getIdj2() . "</td>";
            echo " <td>" . $partida->getIdj3() . "</td>";
            echo " <td>" . $partida->getIdj4() . "</td>";
            echo "<td>";
            echo "<a href='index.php?accion=eliminarPartida&idPartida=" . $partida->getIdPartida() . "'><button
                                        class='btn btn-danger'>X</button>";
            echo "<a
                                        href='index.php?accion=recogerDatosNuevoRegalo&idRegalo=" . $partida->getIdPartida() . "'><button
                                            class='btn btn-light border border-dark mx-2'>Editar</button>";
            echo "<a href='index.php?accion=detalle&idRegalo=" . $partida->getIdPartida() . "'><button
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