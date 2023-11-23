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

        $consulta = $conexion->prepare("DELETE FROM Incidencia WHERE id = :id");
        $consulta->bindParam(":id", $idIncidencia);
        $consulta->execute();

        $conexionObject->cerrarConexion();
    }

    public static function actualizarIncidencia($idIncidencia, $latitud, $longitud, $ciudad, $direccion, $descripcion, $solucion, $estado){
        $conexionObject = new conexionBBDD();
        $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("UPDATE Incidencia SET latitud = :latitud, longitud = :longitud, ciudad = :ciudad, direccion = :direccion, descripcion = :descripcion, solucion = :solucion, estado = :estado WHERE id = :id");
        $consulta->bindParam(":latitud", $latitud);
        $consulta->bindParam(":longitud", $longitud);
        $consulta->bindParam(":ciudad", $ciudad);
        $consulta->bindParam(":direccion", $direccion);
        $consulta->bindParam(":descripcion", $descripcion);
        $consulta->bindParam(":solucion", $solucion);
        $consulta->bindParam(":estado", $estado);
        $consulta->bindParam(":id", $idIncidencia);

        $consulta->execute();

        $conexionObject->cerrarConexion();
    }

}
?>