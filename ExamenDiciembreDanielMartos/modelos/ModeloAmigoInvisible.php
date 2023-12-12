<?php

namespace AmigoInvisible\modelos;

use AmigoInvisible\modelos\ConexionBBDD;
use PDO;

class ModeloAmigoInvisible
{
    public static function seleccionarTodosLosAmigosInvisibles()
    {
        $conexionObject = new ConexionBBDD();
        $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("SELECT * FROM AmigosInvisibles ORDER BY fecha_tope");
        $consulta->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "AmigoInvisible\modelos\AmigoInvisible");
        $consulta->execute();

        $amigosInvisibles = $consulta->fetchAll();

        $conexionObject->cerrarConexion();

        return $amigosInvisibles;
    }

    public static function seleccionarAmigoInvisibleActual($idAmigoInvisible)
    {
        $conexionObject = new ConexionBBDD();
        $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("SELECT * FROM AmigosInvisibles WHERE id = :id");
        $consulta->bindParam(":id", $idAmigoInvisible);
        $consulta->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "AmigoInvisible\modelos\AmigoInvisible");
        $consulta->execute();

        $amigoInvisible = $consulta->fetch();

        $conexionObject->cerrarConexion();

        return $amigoInvisible;
    }
}

?>