<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librería</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" href="./img/iconotienda.svg" sizes="32x32" type="image/png">
    <style>
        .imagen {
            max-width: 20%;
            max-height: 20%;
            width: auto;
            height: 400px;
        }

        article {
            background-color: rgba(255, 255, 255, 0.5);
            width: auto;
            display: flex;
            justify-content: center;
            margin: 10px;
        }
        footer{
            background-color: slategrey;
            color: whitesmoke;
            font-weight: lighter;
        }
    </style>
</head>

<body>
    <header><img src="./img/logotienda.jfif" alt="" style="width: 10%; height: 10%; display: block; margin: auto"></header>
    <nav style="margin: 20px 10px 100px 10px;">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active text-primary-emphasis" aria-current="page" href="#">Inicio</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-primary-emphasis" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Categorias</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#ciencias">ciencias</a></li>
                    <li><a class="dropdown-item" href="#cocina">cocina</a></li>
                    <li><a class="dropdown-item" href="#deporte">deporte</a></li>
                    <li><a class="dropdown-item" href="#novela negra">novela negra</a></li>
                    <li><a class="dropdown-item" href="#novela romántica">novela romántica</a></li>
                    <li><a class="dropdown-item" href="#historia">historia</a></li>
                    <li><a class="dropdown-item" href="#sci-fi">sci-fi</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link text-primary-emphasis" href="#">Link</a>
            </li>

        </ul>
    </nav>

