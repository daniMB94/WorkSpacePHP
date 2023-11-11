<?php

namespace regalosNavidad\controladores;

use regalosNavidad\vistas\VistaInicio;
use regalosNavidad\modelos\ModeloRegalos;

class ControladorRegalosNavidad
{

    public static function mostrarInicio()
    {
        VistaInicio::render();

    }

}


?>