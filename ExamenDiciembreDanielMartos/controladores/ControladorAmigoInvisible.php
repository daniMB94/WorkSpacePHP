<?php

namespace AmigoInvisible\controladores;

use AmigoInvisible\modelos\ModeloAmigoInvisible;
use AmigoInvisible\vistas\VistaAmigosInvisibles;

class ControladorAmigoInvisible
{
    public static function seleccionarTodosLosAmigosInvisibles()
    {
        $amigosInvisibles = ModeloAmigoInvisible::seleccionarTodosLosAmigosInvisibles();
        VistaAmigosInvisibles::render($amigosInvisibles);
    }
}



?>