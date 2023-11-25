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
}
?>