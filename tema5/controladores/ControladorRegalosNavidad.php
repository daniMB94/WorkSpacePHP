<?php

namespace regalosNavidad\controladores;

use regalosNavidad\vistas\VistaInicio;
use regalosNavidad\vistas\VistaConfirmacionRegistro;
use regalosNavidad\modelos\Usuario;
use regalosNavidad\modelos\ModeloUsuarios;
use regalosNavidad\vistas\VistaFormularioRegistro;
use regalosNavidad\vistas\VistaErrorRegistro;
use regalosNavidad\modelos\ModeloRegalosNavidad;
use regalosNavidad\vistas\VistaRegalosUsuario;
use regalosNavidad\vistas\VistaErrorSignIn;


class ControladorRegalosNavidad
{
    //ES LA PANTALLA PRINCIPAL AL ACCEDER A LA APLICACION. AQUI PUEDES LOGEARTE O REGISTRARTE
    public static function mostrarInicio()
    {
        VistaInicio::render();

    }

    //INTRODUCIMOS LOS DATOS DE REGISTRO DE NUEVO USUARIO
    public static function introducirDatosRegistro() {
        VistaFormularioRegistro::render();
    }

    //TRAS INTRODUCIR LOS DATOS COMPROBAMOS SI EL USUARIO EXISTE EN LA BBDD
    public static function comprobarExistenciaUsuario($nickname) {

        return ModeloUsuarios::confirmarExistenciaUsuario($nickname);
            
    }

    //SI USUARIO NO EXISTE SE REGISTRA EN LA BDD Y SE CONFIRMA CON UN MENSAJE
    public static function registroUsuarioBBDD($nombre, $nickname, $passwordC){
        $usuario = new Usuario(nombre:$nombre, nickname:$nickname, passwordC:$passwordC);

        ModeloUsuarios::insertarUsuario($usuario);

    }
    public static function mostrarConfirmacionRegistro() {
        VistaConfirmacionRegistro::render();
    }
    //SI USUARIO EXISTE NO SE REGISTRA EN LA BBDD Y SE AVISA CON UN MENSAJE
    public static function mostrarErrorRegistro(){
        VistaErrorRegistro::render();
    }

    //TRAS INTRODUCIR LOS DATOS COMPROBAMOS SI EL USUARIO EXISTE EN LA BBDD Y SU CONTRASEÑA ES CORRECTA
    public static function comprobarCredenciales($nickname, $passwordC){
        return ModeloUsuarios::comprobarContraseniaUsuario($nickname, $passwordC);
    }

    public static function idUsuario($nickname){
        return ModeloUsuarios::idUsuario($nickname);
    }

    public static function mostrarRegalosUsuario($idUsuario){

        $regalos = ModeloRegalosNavidad::mostrarRegalosUsuario($idUsuario);

        VistaRegalosUsuario::render($regalos);

    }
    public static function mostrarError(){
        VistaErrorSignIn::render();
    }

}
