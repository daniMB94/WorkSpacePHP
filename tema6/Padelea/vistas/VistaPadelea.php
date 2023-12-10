<?php

namespace Padelea\vistas;

class VistaPadelea
{

    public static function renderInicio()
    {
        include("cabecera.php");
        ?>


        <section class="p-4">
            <div class="container-fluid h-custom">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-md-9 col-lg-6 col-xl-5">
                        <img src="../../../tema6/Padelea/padel.jpg" alt="Raqueta de padel" class="img-fluid">
                    </div>
                    <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                        <form action="index.php" method="post">

                            <!-- USUARIO INPUT -->
                            <div class="form-outline mb-4">
                                <input type="text" class="form-control form-control-lg" placeholder="Introduce tu apodo"
                                    name="apodo" />
                                <label class="form-label" for="form3Example3">Apodo</label>
                            </div>

                            <!-- CONTRASEÑA INPUT -->
                            <div class="form-outline mb-3">
                                <input type="password" id="form3Example4" class="form-control form-control-lg"
                                    placeholder="Introduce tu contraseña" name="passwordC" />
                                <label class="form-label" for="form3Example4">Contraseña</label>
                            </div>

                            <div class="text-center text-lg-start mt-4 pt-2">
                                <button type="submit" class="btn btn-primary btn-lg"
                                    style="padding-left: 2.5rem; padding-right: 2.5rem;" name="accion"
                                    value="login">Login</button>


                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </section>

        <?php
        include("pie.php");
    }
}





?>