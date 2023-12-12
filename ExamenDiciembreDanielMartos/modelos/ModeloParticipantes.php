<?php

namespace AmigoInvisible\modelos;

use AmigoInvisible\modelos\ConexionBBDD;
use PDO;

class ModeloParticipantes
{
    public static function seleccionarParticipantesDeUnAmigoInvisible($idParticipantes)
    {


        $_SESSION["participantes"] = array();
        for ($i = 0; $i < count($idParticipantes); $i++) {
            $conexionObject = new ConexionBBDD();
            $conexion = $conexionObject->getConexion();

            $consulta = $conexion->prepare("SELECT * FROM Participantes WHERE id = :id");
            $consulta->bindParam(":id", $idParticipantes[$i]);
            $consulta->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "AmigoInvisible\modelos\Participante");
            $consulta->execute();

            $amigosInvisiblesYParticipantes = $consulta->fetch();

            $objetosSerializados["participantes"] = serialize($amigosInvisiblesYParticipantes);

            array_push($_SESSION["participantes"], $objetosSerializados["participantes"]);

            $objetosSerializados["participantes"] = array();

            $conexionObject->cerrarConexion();


        }



    }
}

?>