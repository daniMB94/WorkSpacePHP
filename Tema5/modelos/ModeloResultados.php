<?php
    namespace DeepRacer\modelos;
    use DeepRacer\modelos\ConexionBaseDeDatos;
    use PDO;

    class modeloResultados {

        public static function visualizar() {


            $conexionObject = new ConexionBaseDeDatos();
            $conexion = $conexionObject->getConexion();

            $consulta = $conexion->prepare("SELECT * FROM resultados");
            $consulta->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'DeepRacer\modelos\Resultado'); //Nombre de la clase
            $consulta->execute();           
    
            $resultados = $consulta->fetchAll();

            $conexionObject->cerrarConexion();

            return $resultados;


    }
}

?>