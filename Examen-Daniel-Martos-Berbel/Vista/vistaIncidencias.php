<?php

namespace incidencias\Vista;

class vistaIncidencias
{
    

    public static function render($incidencias)
    {
        include("cabecera.php");
        ?>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne">
                        DESPLEGAR/ESCONDER INCIDENCIAS
                    </button>
                </h2>

                <?php

                echo "<div id='collapseOne' class='accordion-collapse collapse show' aria-labelledby='headingOne' data-bs-parent='#accordionExample'>";
                echo "<div class='accordion-body'>";
                echo "

    <table class='table table-light'>
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Latitud</th>
                <th>Longitud</th>
                <th>Ciudad</th>
                <th>Direccion</th>
                <th>Descripcon</th>
                <th>Solucion</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>";
                foreach ($incidencias as $incidencia) {

                    echo "<div id='collapseOne' class='accordion-collapse collapse show' aria-labelledby='headingOne' data-bs-parent='#accordionExample'>";
                    echo "<div class='accordion-body'>";
                    echo "<tr>";
                    echo " <td>" . $incidencia->getIdCliente() . "</td>";
                    echo " <td>" . $incidencia->getLatitud() . "</td>";
                    echo " <td>" . $incidencia->getLongitud() . "</td>";
                    echo " <td>" . $incidencia->getCiudad() . "</td>";
                    echo " <td>" . $incidencia->getDireccion() . "</td>";
                    echo " <td>" . $incidencia->getDescripcion() . "</td>";
                    echo " <td>" . $incidencia->getSolucion() . "</td>";
                    echo " <td>" . $incidencia->getEstado() . "</td>";
                    echo "<td>";
                    echo "<a href='index.php?accion=borrarIncidencia&idIncidencia=" . $incidencia->getId() . "'><button class='btn btn-danger'>X</button>";
                    echo "<a href='index.php?accion=recogerDatosNuevaIncidencia&idIncidencia=" . $incidencia->getId() . "'><button class='btn btn-light'>Editar</button>";
                    echo "</td>";
                    echo "</tr>";
                    echo "</div>";
                    echo "</div>";

                }

                echo "</tbody>
            </table>";
                echo "<a href='index.php?accion=recogerDatosNuevaIncidencia&idIncidencia'><button type='submit' class='btn btn-success'>Insertar Incidencia</button></a>";


                ?>
            </div>
        </div>


        <?php

        include("pie.php");
    }
}

?>