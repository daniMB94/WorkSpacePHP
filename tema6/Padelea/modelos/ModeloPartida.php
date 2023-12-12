<?php

namespace Padelea\modelos;

use Padelea\modelos\ConexionBBDD;
use PDO;

class ModeloPartida
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
        public static function todasLasPartidas()
        {
                $conexionObject = new ConexionBBDD();
                $conexion = $conexionObject->getConexion();

                $consulta = $conexion->prepare("SELECT * FROM partidas ORDER BY fecha");
                $consulta->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Padelea\modelos\Partida");
                $consulta->execute();

                $partidas = $consulta->fetchAll();

                $conexionObject->cerrarConexion();

                return $partidas;

        }

        public static function partidaSeleccionada($idPartida)
        {
                $conexionObject = new ConexionBBDD();
                $conexion = $conexionObject->getConexion();

                $consulta = $conexion->prepare("SELECT * FROM partidas WHERE idPartida LIKE :idPartida");
                $consulta->bindParam(":idPartida", $idPartida);
                $consulta->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Padelea\modelos\Partida");
                $consulta->execute();

                $partida = $consulta->fetch();

                $conexionObject->cerrarConexion();

                return $partida;
        }

        public static function eliminarPartida($idPartida)
        {
                $conexionObject = new ConexionBBDD();
                $conexion = $conexionObject->getConexion();

                $consulta = $conexion->prepare("DELETE FROM partidas WHERE idPartida LIKE :idPartida");
                $consulta->bindParam(":idPartida", $idPartida);
                $consulta->execute();

                $conexionObject->cerrarConexion();
        }

        public static function actualizarEstado($idPartida, $booleano)
        {
                if ($booleano) {
                        $estado = 1;
                } else {
                        $estado = 0;
                }


                $conexionObject = new ConexionBBDD();
                $conexion = $conexionObject->getConexion();

                $consulta = $conexion->prepare("UPDATE partidas SET estado = :estado WHERE idPartida = :idPartida");
                $consulta->bindParam(":estado", $estado);
                $consulta->bindParam(":idPartida", $idPartida);
                $consulta->execute();

                $conexionObject->cerrarConexion();

        }
}



?>