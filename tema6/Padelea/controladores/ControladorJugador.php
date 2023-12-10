<?php

namespace Padelea\controladores;

use Padelea\modelos\modeloJugador;

class ControladorJugador
{
    public static function mostrarJugador()
    {
        return ModeloJugador::mostarJugador();
    }

    public static function comprobarExistenciaJugador($apodo)
    {
        return ModeloJugador::comprobarExistenciaJugador($apodo);
    }
}

?>