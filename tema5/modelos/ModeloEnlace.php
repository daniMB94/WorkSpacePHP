<?php
namespace regalosNavidad\modelos;

use regalosNavidad\modelos\ConexionBaseDeDatos;
use PDO;

class ModeloEnlace{
    public static function obtenerEnlacesRegalo($idRegalo) {
        $conexionObject = new ConexionBaseDeDatos();
        $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("SELECT * FROM Enlaces WHERE idRegalo = :idRegalo");
        $consulta->bindParam(":idRegalo", $idRegalo);

        $consulta->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'regalosNavidad\modelos\Enlace');
        $consulta->execute();

        $enlaces = $consulta->fetchAll();

        $conexionObject->cerrarConexion();

        return $enlaces;
    }
    public static function insertarEnlace($idRegalo, $url, $precio){
        $conexionObject = new ConexionBaseDeDatos();
        $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("INSERT INTO Enlaces(idRegalo, url, precio) VALUES (?, ?, ?)");
        $consulta->bindValue(1, $idRegalo);
        $consulta->bindValue(2, $url);
        $consulta->bindValue(3, $precio);

        $consulta->execute();

        $conexionObject->cerrarConexion();

    }
    public static function eliminarEnlace($idEnlace) {
        $conexionObject = new ConexionBaseDeDatos();
        $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("DELETE FROM Enlaces WHERE id = :idEnlace");
        $consulta->bindParam(":idEnlace", $idEnlace);

        $idRegalo = $consulta->prepare("SELECT DISTINCT idRegalo FROM Enlaces WHERE id = :idEnlace");

        $consulta->execute();

        $conexionObject->cerrarConexion();
    }

}
?>