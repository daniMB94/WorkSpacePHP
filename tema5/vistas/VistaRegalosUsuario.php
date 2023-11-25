<?php

namespace regalosNavidad\vistas;

class VistaRegalosUsuario
{

    public static function render($regalos)
    {
        include("cabeceraPrincipal.php");
        ?>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne">
                        DESPLEGAR/ESCONDER REGALOS
                    </button>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Todos los años</option>
                        <?php
                        $arrayAnios = array();
                        foreach ($regalos as $regalo) {
                            if (!in_array($regalo->getAnio(), $arrayAnios)) {
                                array_push($arrayAnios, $regalo->getAnio());
                                echo "<option value='".$regalo->getAnio()."'>".$regalo->getAnio()."</option>";
                            }
                        }
                        ?>
                        

                    </select>
                </h2>

                <?php

                echo "<div id='collapseOne' class='accordion-collapse collapse show' aria-labelledby='headingOne' data-bs-parent='#accordionExample'>";
                echo "<div class='accordion-body'>";
                echo "

    <table class='table table-light'>
        <thead>
            <tr>
                <th>Categoria</th>
                <th>Nombre</th>
                <th>Quien recibe</th>
                <th>Año</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>";
                foreach ($regalos as $regalo) {

                    echo "<div id='collapseOne' class='accordion-collapse collapse show' aria-labelledby='headingOne' data-bs-parent='#accordionExample'>";
                    echo "<div class='accordion-body'>";
                    echo "<tr>";
                    echo " <td>" . $regalo->getCategoria() . "</td>";
                    echo " <td>" . $regalo->getNombre_articulo() . "</td>";
                    echo " <td>" . $regalo->getQuien_recibe() . "</td>";
                    echo " <td>" . $regalo->getAnio() . "</td>";
                    echo "<td>";
                    echo "<a href='index.php?accion=eliminarRegalo&idRegalo=" . $regalo->getId() . "'><button class='btn btn-danger'>X</button>";
                    echo "<a href='index.php?accion=recogerDatosNuevoRegalo&idRegalo=" . $regalo->getId() . "'><button class='btn btn-light border border-dark mx-2'>@</button>";
                    echo "<a href='index.php?accion=detalle&idRegalo=" .$regalo->getId() . "'><button class='btn btn-info'>Detalle</button>";
                    echo "</td>";
                    echo "</tr>";
                    echo "</div>";
                    echo "</div>";

                }

                echo "</tbody>
            </table>";
                echo "<a href='index.php?accion=recogerDatosNuevoRegalo'><button type='submit' class='btn btn-success'>Insertar Regalo</button></a>";



                ?>
            </div>
        </div>




        <?php

        include("pie.php");
    }
}

?>