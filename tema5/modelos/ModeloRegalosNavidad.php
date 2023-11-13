<?php

namespace regalosNavidad\modelos;
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
        //POR IMPLEMENTAR
    }
}

?>