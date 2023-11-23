<?php
namespace incidencias\Modelo;

use incidencias\Modelo\conexionBBDD;
use PDO;

class modeloIncidencias {
    public static function consultarIncidencias(){
        $conexionObject = new conexionBBDD();
        $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("SELECT * FROM Incidencia");

        $consulta->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'incidencias\Modelo\Incidencia'); //Nombre de la clase
        $consulta-> execute();

        $incidencias = $consulta->fetchAll();

        $conexionObject->cerrarConexion();

        return $incidencias;
    }

    public static function borrarIncidencia($idIncidencia){
        $conexionObject = new conexionBBDD();
        $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("DELETE FROM IncidenciasClientes WHERE id = :id");
        $consulta->bindParam(':id', $idIncidencia);
        $consulta->execute();

        $conexionObject->cerrarConexion();
    }
}
?>