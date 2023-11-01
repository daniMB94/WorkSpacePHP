<?php


include "cabecera.php";
?>



<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    DataTable Example
                </div>
                <div class="card-body">

                    <?php
                        include "proyectos.php";

                    ?>

                <?php
                

                    echo '<table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Fecha de Inicio</th>
                                    <th>Fecha Fin</th>
                                    <th>Días transcurridos</th>
                                    <th>Porcentaje completado</th>
                                    <th>Importancia</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Fecha de Inicio</th>
                                    <th>Fecha Fin</th>
                                    <th>Días transcurridos</th>
                                    <th>Porcentaje completado</th>
                                    <th>Importancia</th>
                                </tr>
                            </tfoot>
                            <tbody>
        ';

        if(isset($_SESSION['usuario'])){
            foreach ($_SESSION['proyectos'] as $linea) {

                echo '
    
        <tr>
            <td>' . $linea["id"] . '</th>
            <td>' . $linea["nombre"] . '</th>
            <td>' . $linea["fechaInicio"] . '</th>
            <td>' . $linea["fechaFin"] . '</th>
            <td>' . $linea["dias"] . '</th>
            <td>' . $linea["porcentajeCompletado"] . '</th>
            <td>' . $linea["importancia"] . '</th>
        </tr>
    
';
            }
            

            
        } else {
            echo "<div class='callout-danger bg-danger'><strong>Acceso denegado.</strong> Se necesita estar loggeado</div>";
            
        }
            echo '</tbody>';
            echo '</table>';
        ?>
                    
                    <?php
                    include "pie.php";
                    ?>