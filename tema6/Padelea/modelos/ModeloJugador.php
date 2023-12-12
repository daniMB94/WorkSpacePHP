<?php

namespace Padelea\modelos;

use Padelea\modelos\ConexionBBDD;
use Padelea\modelos\Jugador;
use PDO;

class ModeloJugador
{
    public static function insertarJugador($jugador)
    {
        $conexionObject = new ConexionBBDD();
        $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("INSERT INTO jugadores(fecha, hora, ciudad, lugar, cubierto, estado, idj1, idj2, dij3, idj4) VALUES (?,?,?,?,?,?,?,?,?,?)");
        $consulta->bindValue(1, $jugador->getEmail());
        $consulta->bindValue(2, $jugador->getPasswordC());
        $consulta->bindValue(3, $jugador->getNombre());
        $consulta->bindValue(4, $jugador->getApodo());
        $consulta->bindValue(5, $jugador->getNivel());

        $consulta->execute();

        $conexionObject->cerrarConexion();
    }


    public static function comprobarExistenciaJugador($apodo)
    {
        $conexionObject = new ConexionBBDD();
        $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("SELECT * FROM jugadores WHERE apodo LIKE :apodo");
        $consulta->bindParam(":apodo", $apodo);
        $consulta->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Padelea\modelos\Jugador');
        $consulta->execute();

        $jugador = $consulta->fetch();

        $conexionObject->cerrarConexion();

        return $jugador;
    }

    public static function obtenerApodo($idJugador)
    {
        $conexionObject = new ConexionBBDD();
        $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("SELECT * FROM jugadores WHERE idJugador LIKE :idJugador");
        $consulta->bindParam(":idJugador", $idJugador);
        $consulta->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Padelea\modelos\Jugador');
        $consulta->execute();

        $jugador = $consulta->fetch();

        $conexionObject->cerrarConexion();

        return $jugador;
    }


}

?>