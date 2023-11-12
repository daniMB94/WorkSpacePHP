<?php

namespace regalosNavidad\vistas;

class VistaRegalosUsuario{

    public static function render($regalos){
        include("cabeceraPrincipal.php");

        foreach($regalos as $regalo){
            echo $regalo->getNombre_articulo()."<br>";
        }

        include("pie.php");
    }


}

?>