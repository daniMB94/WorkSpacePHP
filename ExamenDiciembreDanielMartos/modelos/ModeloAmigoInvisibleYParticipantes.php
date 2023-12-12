<?php

namespace AmigoInvisible\modelos;

use AmigoInvisible\modelos\ConexionBBDD;
use PDO;

class ModeloAmigoInvisibleYParticipantes
{
    public static function seleccionarRegistrosAmigoInvisiblePorId($idAmigoInvisible)
    {
        $conexionObject = new ConexionBBDD();
        $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("SELECT * FROM AmigosInvisiblesYParticipantes WHERE idAmigosInvisibles = :idAmigosInvisibles");
        $consulta->bindParam(":idAmigosInvisibles", $idAmigoInvisible);
        $consulta->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "AmigoInvisible\modelos\AmigosInvisiblesYParticipantes");
        $consulta->execute();

        $amigosInvisiblesYParticipantes = $consulta->fetchAll();

        $conexionObject->cerrarConexion();

        return $amigosInvisiblesYParticipantes;
    }
}

?>