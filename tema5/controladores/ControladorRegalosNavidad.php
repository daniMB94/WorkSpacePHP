<?php

namespace regalosNavidad\controladores;

use DeepRacer\modelos\ConexionBaseDeDatos;
use regalosNavidad\vistas\VistaInicio;
use regalosNavidad\modelos\ModeloRegalos;
use regalosNavidad\vistas\VistaConfirmacionRegistro;
use regalosNavidad\modelos\Usuario;
use regalosNavidad\modelos\ModeloUsuarios;
use regalosNavidad\vistas\VistaFormularioRegistro;

class ControladorRegalosNavidad
{

    public static function mostrarInicio()
    {
        VistaInicio::render();

    }

    public static function mostrarConfirmacionRegistro() {
        VistaConfirmacionRegistro::render();
    }

    public static function registroUsuarioBBDD($nombre, $nickname, $passwordC){
        $usuario = new Usuario(nombre:$nombre, nickname:$nickname, passwordC:$passwordC);

        ModeloUsuarios::insertarUsuario($usuario);

    }

    public static function introducirDatosRegistro() {
        VistaFormularioRegistro::render();
    }

    public static function comprobarExistenciaUsuario($nickname) {

        return ModeloUsuarios::confirmarExistenciaUsuario($nickname);
            
    }

}


?>