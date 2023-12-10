<?php

namespace Padelea\modelos;

use Padelea\modelos\ConexionBBDD;
use PDO;

class ModelosPartida
{
        public static function insertarJugadorAPartida($fecha, $hora, $ciudad, $lugar, $cubierto, $estado, $posicionJugador, $jugador)
        {
                $conexionObject = new ConexionBBDD();
                $conexion = $conexionObject->getConexion();

                $consulta = $conexion->prepare("INSERT INTO partida(fecha, hora, ciudad, lugar, cubierto, estado, idj1, idj2, idj3, idj4) VALUES (?,?,?,?,?,?,?,?,?)");
                $consulta->bindValue(1, $fecha);
                $consulta->bindValue(2, $hora);
                $consulta->bindValue(1, $ciudad);
                $consulta->bindValue(1, $lugar);
                $consulta->bindValue(1, $cubierto);
                $consulta->bindValue(1, $estado);
                switch ($posicionJugador) {
                        case '1':
                                $consulta->bindValue(7, $jugador->getIdJugador());
                                break;
                        case '2':
                                $consulta->bindValue(8, $jugador->getIdJugador());
                                break;
                        case '3':
                                $consulta->bindValue(9, $jugador->getIdJugador());
                                break;
                        case '4':
                                $consulta->bindValue(10, $jugador->getIdJugador());
                                break;

                        default:
                                # code...
                                break;
                }


        }
}



?>