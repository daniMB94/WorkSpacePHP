<?php

session_start();

//Login
if($_POST){
    if(isset($_POST["formLogin"])){
        $email = $_POST['email'];
        $_SESSION['usuario'] = array("email" => $email);
        
        header("Location: index.php");
        die();
    }
}

//Acción cerrar sesión
if (isset($_GET['accion'])) {
    if (strcmp($_GET['accion'],"cerrarSesion") == 0) {
        session_destroy();

        header("Location: index.php");
        die();
    }
}


//Añadir proyecto

/*

if ($_POST) {
    $nuevoProyecto = [
        'id' => $_POST['id'],
        'nombre' => $_POST['nombre'],
        'fechaInicio' => $_POST['fechaInicio'],
        'fechaFin' => $_POST['fechaFin'],
        'dias' => $_POST['dias'],
        'porcentajeCompletado' => $_POST['porcentajeCompletado'],
        'importancia' => $_POST['importancia']
    ];

    // Asumiendo que $proyectos es el array de proyectos existente
    $proyectos[] = $nuevoProyecto;

    // Puedes guardar o actualizar $proyectos en una base de datos aquí

    // Redirecciona o muestra un mensaje de éxito
    header("Location: index.php"); // Reemplaza "proyectos.php" con la página a la que quieras redirigir
    die();
}

    
 */







//Eliminar proyecto
?>