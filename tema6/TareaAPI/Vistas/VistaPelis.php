<?php

namespace ConsumirAPI\Vistas;

class VistaPelis
{
    public static function render($respPHP)
    {


        include("cabecera.php");
        ?>
        <main>

            <section class="py-5 text-center container">
                <div class="row py-lg-5">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <h1 class="fw-light">Album example</h1>
                        <p class="lead text-muted">Something short and leading about the collection below—its contents, the
                            creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it
                            entirely.</p>
                        <p>
                            <a href="#" class="btn btn-primary my-2">Main call to action</a>
                            <a href="#" class="btn btn-secondary my-2">Secondary action</a>
                        </p>
                    </div>
                </div>
            </section>

            <div class="album py-5 bg-light">
                <div class="container">

                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                        <?php

                        foreach ($respPHP->results as $serie) {

                            ?>
                            <div class="col">
                                <div class="card shadow-sm">

                                    <?php echo "<img src='http://image.tmdb.org/t/p/w500/" . $serie->poster_path . "'>"; ?>


                                    <div class="card-body">
                                        <p class="card-text">This is a wider card with supporting text below as a natural
                                            lead-in to additional content. This content is a little bit longer.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <a href="index.php?accion=detallesPeli&idPeli=<?= $serie->id ?>"><button
                                                        type="button" class="btn btn-sm btn-outline-secondary">Ver
                                                        Detalles</button></a>
                                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                            </div>
                                            <small class="text-muted">9 mins</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php
                        }

                        ?>



                    </div>
                </div>
            </div>

        </main>


        <?php
        include("pie.php");
    }
}
?>