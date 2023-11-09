<?php

    namespace DeepRacer\controladores;
    use DeepRacer\vistas\VistaInicio;
    use DeepRacer\modelos\ModeloResultados;
    use DeepRacer\vistas\VistaResultados;

    class ControladorDeepRacer {

        public static function mostrarInicio() {

            VistaInicio::render();
        }


        public static function visualizar() {

            //LLAMAMOS A LA BBDD PARA TRAERME LOS RESULTADOS ACTUALES
            $resultados = ModeloResultados::visualizar();


            //LLAMAMOS PARA PINTAR LOS RESULTADOS ACTUALES
            VistaResultados::render($resultados);

        }

        public static function eliminarResultado($id){
            ModeloResultados::eliminarResultado($id);

            $resultado = ModeloResultados::visualizar();

            VistaResultados::render($resultado);

        }

    }



?>