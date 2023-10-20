<?php

//Login
if($_POST){
    if(isset($_POST["formLogin"])){
        $email = $_POST['email'];
        $nombre = $_POST['nombre'];
        $_SESSION['usuario'] = array('nombre' => $nombre, 'email' => $email);
    }
}

?>