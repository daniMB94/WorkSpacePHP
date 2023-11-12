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

    public static function confirmarExistenciaUsuario($nickname) {

        $conexionObject = new ConexionBaseDeDatos();
        $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("SELECT * FROM Usuarios");
        $consulta->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'regalosNavidad\modelos\Usuario'); //Nombre de la clase
        $consulta-> execute();

        $usuarios = $consulta->fetchAll();

        $conexionObject->cerrarConexion();

        foreach($usuarios as $usuario) {
            if(strcmp($usuario->getNickname(), $nickname) == 0) {

                return true;
            }

        }

        return false;

        
       
    }
}
