<?php

session_start();

//Login
if($_POST){
    if(isset($_POST["formLogin"])){
        $email = $_POST['email'];
        $_SESSION['usuario'] = array("nombre" => "", "email" => $email);
        
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
?>