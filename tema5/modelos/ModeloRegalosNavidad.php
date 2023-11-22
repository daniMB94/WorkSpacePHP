<?php

namespace regalosNavidad\modelos;
use regalosNavidad\modelos\ConexionBaseDeDatos;
use PDO;

class ModeloRegalosNavidad{
    public static function mostrarRegalosUsuario($idUsuario){
        $conexionObject = new ConexionBaseDeDatos();
        $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("SELECT * FROM Regalos WHERE idUsuario = :idUsuario");
        $consulta->bindParam(':idUsuario', $idUsuario);

        $consulta->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'regalosNavidad\modelos\RegaloNavidad'); //Nombre de la clase
        $consulta-> execute();

        $regalos = $consulta->fetchAll();

        $conexionObject->cerrarConexion();

        return $regalos;
    }

    public static function eliminarRegalo($idRegalo){
        $conexionObject = new ConexionBaseDeDatos();
        $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("DELETE FROM Regalos WHERE id = :id");
        $consulta->bindParam(':id', $idRegalo);
        $consulta->execute();

        $conexionObject->cerrarConexion();
    }

    public static function insertarRegalo($nuevoRegalo){
        $conexionObject = new ConexionBaseDeDatos();
        $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("INSERT INTO Regalos(idUsuario, categoria, nombre_articulo, quien_recibe, anio) VALUES (?, ?, ?, ?, ?)");
        $consulta->bindValue(1, $nuevoRegalo->getIdUsuario());
        $consulta->bindValue(2, $nuevoRegalo->getCategoria());
        $consulta->bindValue(3, $nuevoRegalo->getNombre_articulo());
        $consulta->bindValue(4, $nuevoRegalo->getQuien_recibe());
        $consulta->bindValue(5, $nuevoRegalo->getAnio());

        $consulta->execute();

        $conexionObject->cerrarConexion();
    }

    public static function modificarRegalo($idRegalo, $categoria, $nombre_articulo, $quien_recibe, $anio) {
        $conexionObject = new ConexionBaseDeDatos();
        $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("UPDATE Regalos SET categoria = :categoria, nombre_articulo = :nombre_articulo, quien_recibe = :quien_recibe, anio = :anio WHERE id = :idRegalo");
        $consulta->bindParam(":categoria", $categoria);
        $consulta->bindParam(":nombre_articulo", $nombre_articulo);
        $consulta->bindParam(":quien_recibe", $quien_recibe);
        $consulta->bindParam(":anio", $anio);
        $consulta->bindParam(":idRegalo", $idRegalo);

        $consulta->execute();

        $conexionObject->cerrarConexion();
    }

    public static function obtenerRegalosPorAnio($anio, $idUsuario) {
        $conexionObject = new ConexionBaseDeDatos();
        $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("SELECT * FROM Regalos WHERE idUsuario = :idUsuario AND anio = :anio");
        $consulta->bindParam(":anio", $anio);
        $consulta->bindParam(":idUsuario", $idUsuario);

        $consulta->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'regalosNavidad\modelos\RegaloNavidad');
        $consulta->execute();

        $regalos = $consulta->fetchAll();

        $conexionObject->cerrarConexion();

        return $regalos;
    }
}

?>