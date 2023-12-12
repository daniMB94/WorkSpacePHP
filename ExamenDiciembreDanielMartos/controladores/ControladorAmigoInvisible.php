<?php

namespace AmigoInvisible\controladores;

use AmigoInvisible\modelos\ModeloAmigoInvisible;
use AmigoInvisible\vistas\VistaAmigosInvisibles;
use AmigoInvisible\modelos\ModeloAmigoInvisibleYParticipantes;
use AmigoInvisible\modelos\ModeloParticipantes;
use AmigoInvisible\vistas\VistaParticipantesDeAmigoInvisible;
use AmigoInvisible\vistas\VistaFormNuevoParticipante;

class ControladorAmigoInvisible
{
    public static function seleccionarTodosLosAmigosInvisibles()
    {
        $amigosInvisibles = ModeloAmigoInvisible::seleccionarTodosLosAmigosInvisibles();
        VistaAmigosInvisibles::render($amigosInvisibles);
    }

    public static function salir()
    {
        $_SESSION["activo"] = false;
        header("location: index.php");
        var_dump($_SESSION["activo"]);
    }

    public static function verParticipantes($idAmigoInvisible)
    {
        //Obtenemos todos los registros de la tabla intermedia donde esté ese ID del AmigoInvisible seleccionado
        $amigoInvisibleYParticipantes = ModeloAmigoInvisibleYParticipantes::seleccionarRegistrosAmigoInvisiblePorId($idAmigoInvisible);
        //Creamos un array donde iremos introduciendo los id de los participantes de ese Amigo Invisible en concreto
        $idParticipantes = array();
        //Con dichos registros podemos obtener todos los id de sus participantes
        foreach ($amigoInvisibleYParticipantes as $amigoInvisibleYParticipante) {
            $idParticipante = $amigoInvisibleYParticipante->getIdParticipantes();
            array_push($idParticipantes, $idParticipante);
        }
        //Nos recorremos ese array de id de participantes y en cada iteración llamamos nos traemos de la BBDD el objeto participante y lo guardamos en la sesion
        ModeloParticipantes::seleccionarParticipantesDeUnAmigoInvisible($idParticipantes);

        //var_dump($_SESSION["participantes"]); AQUI ESTABA COMPROBANDO QUE EFECTIVAMENTE TENGO LOS PARTICIPANTES GUARDADOS EN LA SESION

        //Con el $idAmigoInvisible vamos a sacar la información de ese Amigo Invisible para usarlo en la vista siguiente (los participantes de ese Amigo Invisible)
        $amigoInvisible = ModeloAmigoInvisible::seleccionarAmigoInvisibleActual($idAmigoInvisible);

        //pintamos los Participantes del Amigo Invisible seleccionados sin pasar parámetros porque podremos usar la sesion para recuperarlos

        VistaParticipantesDeAmigoInvisible::render($amigoInvisible);

    }

    public static function eliminarAmigoInvisible($idAmigoInvisible)
    {
        ModeloAmigoInvisible::eliminarAmigoInvisible($idAmigoInvisible);

        self::seleccionarTodosLosAmigosInvisibles();
    }

    public static function aniadirParticipante($idAmigoInvisible)
    {
        VistaFormNuevoParticipante::render($idAmigoInvisible);
    }
}



?>