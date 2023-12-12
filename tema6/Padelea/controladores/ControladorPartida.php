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
        $apodosPartidas = array();
        $idJugadoresPartida = array();

        foreach ($partidas as $partida) {

            $apodos = array();
            array_push($idJugadoresPartida, $partida->getIdj1());
            array_push($idJugadoresPartida, $partida->getIdj2());
            array_push($idJugadoresPartida, $partida->getIdj3());
            array_push($idJugadoresPartida, $partida->getIdj4());

            //Aprovechamos y actualizamos el estado de la partida 
            if ($partida->getEstado()) {
                //en caso de que estén todos los huecos llenos se pondrá como cerrada
                if (is_numeric($idJugadoresPartida[0]) && is_numeric($idJugadoresPartida[1]) && is_numeric($idJugadoresPartida[2]) && is_numeric($idJugadoresPartida[3])) {
                    ModeloPartida::actualizarEstado($partida->getIdPartida(), false);
                } else {
                    ModeloPartida::actualizarEstado($partida->getIdPartida(), true);
                }
            } else {
                if (is_null($idJugadoresPartida[0]) || is_null($idJugadoresPartida[1]) || is_null($idJugadoresPartida[2]) || is_null($idJugadoresPartida[3])) {
                    ModeloPartida::actualizarEstado($partida->getIdPartida(), true);
                } else {
                    ModeloPartida::actualizarEstado($partida->getIdPartida(), false);
                }
            }

            //en caso de que estén todos los huecos llenos se pondrá como abierta




            $apodos = ControladorJugador::jugadoresDeLaPartida($idJugadoresPartida);
            $idJugadoresPartida = array();
            $apodosPartidas[$partida->getIdPartida()] = $apodos;
        }
        //volvemos a obtener todas las partidas para mostrar las ultimas actualizaciones
        $partidas = ModeloPartida::todasLasPartidas();
        VistaPartidas::render($partidas, $apodosPartidas);
    }

    public static function eliminarPartida($idPartida)
    {
        //cogemos el id del jugador de la sesion
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

        if (!is_null($idJugador)) {
            if ($partidaSeleccionada->getIdj1() == $idJugador || $partidaSeleccionada->getIdj2() == $idJugador || $partidaSeleccionada->getIdj3() == $idJugador || $partidaSeleccionada->getIdj4() == $idJugador) {
                //en caso correcto llamamos ModeloPartida con idPartida y eliminamos dicha partida
                //volvemos a repintar vistapartida
                ModeloPartida::eliminarPartida($idPartida);
                self::todasLasPartidas();
            } else {
                //en caso contrario saltará un alert diciendo que no puede eliminar la partida porque no está inscrito en ella
                self::todasLasPartidas();
            }
        }


    }
}

?>