<?php

namespace regalosNavidad\modelos;

use regalosNavidad\modelos\ConexionBaseDeDatos;

class ModeloUsuarios{
    public static function insertarUsuario($usuario) {
        $conexionObject = new ConexionBaseDeDatos();
        $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("INSERT INTO usuarios(nombre, nickname, password) VALUES (?,?,?)");
        $consulta->bindValue(1, $usuario->getNombre());
        $consulta->bindValue(2, $usuario->getNickname());
        $consulta->bindValue(3, $usuario->getPassword());

        $consulta->execute();

        $conexionObject->cerrarConexion();
    }
}

?>