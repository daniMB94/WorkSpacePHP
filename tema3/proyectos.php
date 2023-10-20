<?php

                    $proyectos = array(
                        array(
                            "id" => "proy0001", "nombre" => "Planta hidroeléctrica", "fechaInicio" => "01/01/2023", "fechaFin" => "01/06/2024",
                            "dias" => "30", "porcentajeCompletado" => "5%", "importancia" => "4"
                        ),
                        array(
                            "id" => "proy0002", "nombre" => "Planta nuclear", "fechaInicio" => "01/03/2023", "fechaFin" => "01/06/2025",
                            "dias" => "30", "porcentajeCompletado" => "5%", "importancia" => "4"
                        ),
                        array(
                            "id" => "proy0003", "nombre" => "Desaladora", "fechaInicio" => "01/08/2021", "fechaFin" => "01/02/2024",
                            "dias" => "30", "porcentajeCompletado" => "5%", "importancia" => "4"
                        ),
                        array(
                            "id" => "proy0004", "nombre" => "Serious Game", "fechaInicio" => "01/07/2020", "fechaFin" => "01/03/2024",
                            "dias" => "30", "porcentajeCompletado" => "5%", "importancia" => "4"
                        ),
                        array(
                            "id" => "proy0005", "nombre" => "Línea electrica", "fechaInicio" => "01/01/2019", "fechaFin" => "01/06/2028",
                            "dias" => "30", "porcentajeCompletado" => "5%", "importancia" => "4"
                        ),
                        array(
                            "id" => "proy0006", "nombre" => "Puente colgante", "fechaInicio" => "01/01/2021", "fechaFin" => "01/03/2025",
                            "dias" => "30", "porcentajeCompletado" => "5%", "importancia" => "4"
                        ),
                        array(
                            "id" => "proy0007", "nombre" => "Gestor de energía", "fechaInicio" => "01/01/2013", "fechaFin" => "01/01/2024",
                            "dias" => "30", "porcentajeCompletado" => "5%", "importancia" => "4"
                        ),
                        array(
                            "id" => "proy0008", "nombre" => "Reciclaje", "fechaInicio" => "01/01/2020", "fechaFin" => "01/06/2024",
                            "dias" => "30", "porcentajeCompletado" => "5%", "importancia" => "4"
                        ),
                    );

                    if (!isset($_SESSION['proyectos']))
                        $_SESSION['proyectos'] = $proyectos;
?>
