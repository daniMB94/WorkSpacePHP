<?php
namespace DeepRacer\modelos;

use DeepRacer\modelos\ConexionBaseDeDatos;
use DeepRacer\modelos\Resultado;
use PDO;

class modeloResultados
{

    public static function visualizar()
    {


        $conexionObject = new ConexionBaseDeDatos();
        $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("SELECT * FROM resultados");
        $consulta->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'DeepRacer\modelos\Resultado'); //Nombre de la clase
        $consulta->execute();

        $resultados = $consulta->fetchAll();

        $conexionObject->cerrarConexion();

        return $resultados;


    }

    public static function eliminarResultado($id)
    {
        $conexionObject = new ConexionBaseDeDatos();
        $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("DELETE FROM resultados WHERE id = :id");
        $consulta->bindValue(":id", $id);
        $consulta->execute();

        $conexionObject->cerrarConexion();

    }

    public static function insertarResultado($resultado) {
        $conexionObject = new ConexionBaseDeDatos();
        $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("INSERT INTO resultados (modelo, pista, tiempoVuelta, numeroColisiones) VALUES (?,?,?,?)");
        $consulta->bindValue(1, $resultado->getModelo());
        $consulta->bindValue(2, $resultado->getPista());
        $consulta->bindValue(3, $resultado->getTiempoVuelta());
        $consulta->bindValue(4, $resultado->getNumeroColisiones());
        $consulta->execute();

        $conexionObject->cerrarConexion();

    }

}

?>