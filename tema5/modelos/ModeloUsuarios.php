<?php

namespace regalosNavidad\modelos;

use regalosNavidad\modelos\ConexionBaseDeDatos;
use PDO;

class ModeloUsuarios{
    public static function insertarUsuario($usuario) {
        $conexionObject = new ConexionBaseDeDatos();
        $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("INSERT INTO Usuarios(nombre, nickname, passwordC) VALUES (?,?,?)");
        $consulta->bindValue(1, $usuario->getNombre());
        $consulta->bindValue(2, $usuario->getNickname());
        $consulta->bindValue(3, $usuario->getPasswordC());

        $consulta->execute();

        $conexionObject->cerrarConexion();
    }

    public static function todosLosUsuarios() {

        $conexionObject = new ConexionBaseDeDatos();
        $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("SELECT * FROM Usuarios");
        $consulta->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'regalosNavidad\modelos\Usuario'); //Nombre de la clase
        $consulta-> execute();

        $usuarios = $consulta->fetchAll();

        $conexionObject->cerrarConexion();

        return $usuarios;
    }

    public static function usuario($nickname){
        $conexionObject = new ConexionBaseDeDatos();
        $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("SELECT * FROM Usuarios WHERE nickname = :nickname");
        $consulta->bindParam(':nickname', $nickname);
        $consulta->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'regalosNavidad\modelos\Usuario'); //Nombre de la clase
        $consulta-> execute();

        $usuarios = $consulta->fetchAll();

        $conexionObject->cerrarConexion();

        foreach($usuarios as $usuario){
            $user = new Usuario($usuario->getId(), $usuario->getNombre(), $usuario->getNickname(), $usuario->getPasswordC());
        }

        return $user;
    }

    public static function confirmarExistenciaUsuario($nickname){

    
        $usuarios = self::todosLosUsuarios();

        foreach($usuarios as $usuario) {
            if(strcmp($usuario->getNickname(), $nickname) == 0) {

                return true;
            }

        }

        return false;
       
    }

    public static function comprobarContraseniaUsuario($passwordC, $nickname) {
        if (self::confirmarExistenciaUsuario($nickname)){
            if (strcmp(self::usuario($nickname)->getPasswordC(), $passwordC) == 0){
                return true;
            }
        }

        return false;
    }

    public static function idUsuario($nickname){
        $conexionObject = new ConexionBaseDeDatos();
        $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("SELECT * FROM Usuarios WHERE nickname = :nickname");
        $consulta->bindParam(':nickname', $nickname);        
        $consulta->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'regalosNavidad\modelos\Usuario'); //Nombre de la clase
        $consulta-> execute();

        $usuarios = $consulta->fetchAll();

        $conexionObject->cerrarConexion();

        foreach($usuarios as $usuario){
            $idUsuario = $usuario->getId();
        }

        return $idUsuario;
    }


}
