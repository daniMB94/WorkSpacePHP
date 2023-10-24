<?php

session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="icon" href="./img/iconoWebProyectos.png" sizes="32x32" type="image/png">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">

    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">Start Bootstrap</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <!-- PHP -->
        <?php
        if (!isset($_SESSION['usuario']))
            echo "<a href='./login.php'><button class='btn btn-primary' type='submit'>Login</button></a>";


        ?>

        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>

                    <!-- PHP -->
                    <?php

                    if (isset($_SESSION['usuario']))
                        echo "<li><hr class='dropdown-divider' /></li>";
                    echo "<li><a class='dropdown-item' href='controlador.php?accion=cerrarSesion'>Logout</a></li>";

                    ?>

                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">

                        <div class="sb-sidenav-menu-heading">Acciones</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutsProyectos" aria-expanded="false" aria-controls="collapseLayoutsProyectos">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Proyectos
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayoutsProyectos" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutsAnadirProyecto" aria-expanded="false" aria-controls="collapseLayoutsAnadirProyecto">
                                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                    Añadir Proyecto
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapseLayoutsAnadirProyecto" data-bs-parent="#collapseLayoutsProyectos">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <form action="">
                                            <input type="text">
                                            <input type="date">
                                            <input type="number">
                                        </form>
                                    </nav>
                                </div>
                                <a class="nav-link" href="#">Eliminar proyecto</a>
                            </nav>
                        </div>



                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <?php
                    if (isset($_SESSION['usuario']))
                        echo "<div class='small'>Logged in as:<p class='text-primary me-2'>" . $_SESSION['usuario']['email'] . "</p></div>";
                    ?>

                    Start Bootstrap
                </div>
            </nav>
        </div>


</body>

</html>