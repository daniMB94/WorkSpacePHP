<?php
namespace regalosNavidad\vistas;

class VistaNuevoEnlace{
    public static function render(){
        include("cabeceraPrincipal.php");
?>
    <form action="index.php" method="post">
        <label for=""></label>
    </form>

<?php

        include("pie.php");
    }
}
?>