<?php

namespace Padelea\controladores;

use Padelea\modelos\ModeloPartida;
use Padelea\vistas\VistaPartidas;
use Padelea\modelos\Jugador;

class ControladorPartida
{
    public static function todasLasPartidas()
    {
        $partidas = ModeloPartida::todasLasPartidas();
        VistaPartidas::render($partidas);
    }

    public static function eliminarPartida($idPartida)
    {
        //cogemos el id del jugador de la sesion

        // Iniciar la sesión (si no está iniciada)


        // Recuperar el objeto de la sesión
        $jugador = unserialize($_SESSION["jugador"]);

        // Verificar si el objeto existe y es del tipo esperado
        if ($jugador instanceof Jugador) {
            // Ejecutar el método getIdJugador()
            $idJugador = $jugador->getIdJugador();

        } else {
            echo "El objeto no se encontró en la sesión o no es del tipo esperado.";
        }

        ;


        //Pasamos idPartida y obtenemos la partida de modeloPartida
        $partidaSeleccionada = ModeloPartida::partidaSeleccionada($idPartida);
        //comprobamos si dicha partida tiene como jugador a idjugador
        $idj1 = $partidaSeleccionada->getIdj1();

        var_dump($idj1);
        /*
                if (!is_null($idJugador)) {
                    if ($partidaSeleccionada->getIdj1() == $idJugador || $partidaSeleccionada->getIdj2() == $partidaSeleccionada || $partidaSeleccionada->getIdj3() == $idJugador || $partidaSeleccionada->getIdj4() == $idJugador) {
                        ModeloPartida::eliminarPartida($idPartida);
                        self::todasLasPartidas();
                    }
                } else {
                    echo "No puedes borrar la partida porque no estas inscrito en ella";
                }
        */
        //en caso correcto llamamos ModeloPartida con idPartida y eliminamos dicha partida
        //volvemos a repintar vistapartida

        //en caso contrario saltará un alert diciendo que no puede eliminar la partida porque no está inscrito en ella
    }
}

?>