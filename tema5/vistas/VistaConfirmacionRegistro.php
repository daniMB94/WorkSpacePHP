<?php

namespace regalosNavidad\vistas;

class VistaConfirmacionRegistro{
    public static function render(){
        include("cabeceraPrincipal.php");
        echo "<h1>CONFIRMACION REGISTRO</h1>";
        echo "<p>Se redirigirá a la pagina principal en 5 segundos</p>";
        include("pie.php");
        echo "<script>setTimeout(function() {window.location.href = './index.php';}, 5000)</script>";

    }
}
?>
