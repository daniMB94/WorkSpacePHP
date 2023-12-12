<?php

namespace Padelea\controladores;

use Padelea\modelos\ModeloJugador;


class ControladorJugador
{


    public static function comprobarExistenciaJugador($apodo, $passwordC)
    {
        if (ModeloJugador::comprobarExistenciaJugador($apodo) != false) {

            $jugador = ModeloJugador::comprobarExistenciaJugador($apodo);

            if ($jugador->getPasswordC() == $passwordC) {
                $_SESSION["jugador"] = serialize($jugador);
                return true;
            } else {
                echo "Contraseña incorrecta";
            }

        } else {
            echo "ERROR. Ese usuario no está registrado";
        }
    }

    public static function jugadoresDeLaPartida($idJugadoresPartida)
    {
        $apodos = array();
        for ($i = 0; $i <= 3; $i++) {
            if (is_numeric($idJugadoresPartida[$i])) {
                $jugador = ModeloJugador::obtenerApodo($idJugadoresPartida[$i]);
                $apodo = $jugador->getApodo();
                array_push($apodos, $apodo);
            } else {
                array_push($apodos, "Hueco libre");
            }

        }
        return $apodos;


    }
    public static function cerrarSesion()
    {
        session_destroy();

        header("location: index.php");
    }
}

?>