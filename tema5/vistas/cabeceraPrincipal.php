
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Regalos de navidad</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

  <header class="vh-50 bg-primary mb-2 p-4">
<h1 style="text-align: center; color: white">Aplicacion de regalos</h1>
<?php

  if (isset($_SESSION['nickname'])) {
    echo "<p class='text-white me-4'><u>Logueado como ".$_SESSION['nickname']."</u></p>";
    echo "<a href='index.php?accion=cerrarSesion'><button type='submit' class='btn btn-warning'>cerrar sesion</button></a>";
  } else {
    echo "<h1>HAY QUE LOGUEARSE</h1>";
  }

?>
  </header>
