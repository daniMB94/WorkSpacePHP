<?php

    namespace DeepRacer\controladores;
    use DeepRacer\vistas\VistaInicio;
    use DeepRacer\modelos\ModeloResultados;
    use DeepRacer\vistas\VistaResultados;
    use DeepRacer\vistas\VistaFormInsertar;
    use DeepRacer\modelos\Resultado;

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

        public static function visualizarFormInserccion() {
            VistaFormInsertar::render();

        }

        public static function recibirFormularioNuevoResultado($modelo, $pista, $tiempoVuelta, $numeroColisiones) {
            $resultado = new Resultado(modelo:$modelo, pista:$pista, tiempoVuelta:$tiempoVuelta, numeroColisiones:$numeroColisiones);

            ModeloResultados::insertarResultado($resultado);

            $resultado = ModeloResultados::visualizar();

            VistaResultados::render($resultado);

        }

    }



?>