<?php
namespace DeepRacer;

use DeepRacer\controladores\ControladorDeepRacer;

//Autocargar las clases --------------------------
spl_autoload_register(function ($class) {
    //echo substr($class, strpos($class,"\\")+1);
    $ruta = substr($class, strpos($class, "\\") + 1);
    $ruta = str_replace("\\", "/", $ruta);
    include_once "./" . $ruta . ".php";
});
//Fin Autcargar ----------------------------------


if (isset($_REQUEST)) {
    //Tratamiento de botones, forms, ...
    if (isset($_REQUEST["accion"])) {
        if (strcmp($_REQUEST["accion"], "visualizar") == 0) {

            ControladorDeepRacer::visualizar();

        }
        if (strcmp($_REQUEST["accion"], "eliminarResultado") == 0) {

            $id = $_REQUEST["id"];
            ControladorDeepRacer::eliminarResultado($id);
        }

        if (strcmp($_REQUEST["accion"], "insertarResultado") == 0) {

            ControladorDeepRacer::visualizarFormInserccion();

        }

        if (strcmp($_REQUEST["accion"], "recibirFormNuevoResultado") == 0) {
            $modelo = $_REQUEST["modelo"];
            $pista = $_REQUEST["pista"];
            $tiempoVuelta = $_REQUEST["tiempoVuelta"];
            $numeroColisiones = $_REQUEST["numeroColisiones"];
            ControladorDeepRacer::recibirFormularioNuevoResultado($modelo, $pista, $tiempoVuelta, $numeroColisiones);
        }


    } else {
        //Mostrar inicio
        ControladorDeepRacer::mostrarInicio();
    }

}





?>