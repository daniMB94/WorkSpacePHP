<?php

namespace regalosNavidad\modelos;

use regalosNavidad\modelos\ConexionBaseDeDatos;

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
}

?>