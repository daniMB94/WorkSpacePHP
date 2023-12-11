<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Padelea</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div style="display: flex; flex-direction: column; justify-content: space-between; height: 100vh">
        <header class="vh-50 bg-primary mb-2 p-4">
            <h1 style="text-align: center; color: white">Padelea</h1>
            <?php

            if (isset($_SESSION['jugador'])) {
                $jugador = unserialize($_SESSION["jugador"]);
                echo "<p class='text-white me-4'><u>Logueado como " . $jugador->getApodo() . "</u></p>";
                echo "<a href='index.php?accion=cerrarSesion'><button type='submit' class='btn btn-warning'>cerrar sesion</button></a>";
            }

            ?>
        </header>