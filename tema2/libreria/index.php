<?php
include "cabecera.php"
?>

<h1 class="display-1">Best Sellers</h1>
<!-- CARRUSEL DE LOS BEST SELLERS -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="margin-bottom: 10%;">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" style="background-image: url(./img/cr1.jfif); max-height: 420px;">
      <div style="backdrop-filter: blur(10px)" class="row align-items-center">
        <img src="./img/cr1.jfif" class="d-block w-100 imagen col" alt="...">
        <article class="col">
          <p style="width: 30%;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum labore ab, totam maiores iste culpa impedit sequi pariatur odio, illo earum cum quidem repellendus, nemo adipisci odit provident ratione minima?</p>
          <figure>
            <blockquote class="blockquote">
              <p>A well-known quote, contained in a blockquote element.</p>
            </blockquote>
            <figcaption class="blockquote-footer">
              Someone famous in <cite title="Source Title">Source Title</cite>
            </figcaption>
          </figure>
        </article>
      </div>
    </div>
    <div class="carousel-item" style="background-image: url(./img/cr4.jfif); max-height: 420px;">
      <div style="backdrop-filter: blur(10px)" class="row align-items-center">
        <img src="./img/cr4.jfif" class="d-block w-100 imagen col" alt="...">
        <article class="col">
          <p style="width: 30%;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum labore ab, totam maiores iste culpa impedit sequi pariatur odio, illo earum cum quidem repellendus, nemo adipisci odit provident ratione minima?</p>
          <figure>
            <blockquote class="blockquote">
              <p>A well-known quote, contained in a blockquote element.</p>
            </blockquote>
            <figcaption class="blockquote-footer">
              Someone famous in <cite title="Source Title">Source Title</cite>
            </figcaption>
          </figure>
        </article>
      </div>
    </div>
    <div class="carousel-item" style="background-image: url(./img/cr3.png); max-height: 420px;">
      <div style="backdrop-filter: blur(10px)" class="row align-items-center">
        <img src="./img/cr3.png" class="d-block w-100 imagen col" alt="...">
        <article class="col">
          <p style="width: 30%;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum labore ab, totam maiores iste culpa impedit sequi pariatur odio, illo earum cum quidem repellendus, nemo adipisci odit provident ratione minima?</p>
          <figure>
            <blockquote class="blockquote">
              <p>A well-known quote, contained in a blockquote element.</p>
            </blockquote>
            <figcaption class="blockquote-footer">
              Someone famous in <cite title="Source Title">Source Title</cite>
            </figcaption>
          </figure>
        </article>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<hr>
<main>
  <!-- Se imprimen los libros -->
  <?php

  include "libros.php";

  function imprimir($linea)
  {


    echo '
                <div class="card mb-4 card text-center" style="width: 18rem;">
                    <img src="' . $linea["img"] . '" class="card-img-top" alt="..." style="width: 100px; height: 150px; margin: 0 auto">
                    <div class="card-body">
                        <h4 class="card-title">' . $linea["titulo"] . '</h6>
                        <p class="card-text">' . $linea["precio"] . ' €</p>

                    </div>
                </div>
        ';
  }


  echo '<div class="row" style="display: flex; justify-content: space-between; margin: auto 15px auto 15px">';
  foreach ($categorias as $categoria) {

    echo '<h1 id="'.$categoria.'">' . $categoria . '</h1>';
    foreach ($libros as $libro) {
      if ($libro['categoria'] == $categoria) {
        imprimir($libro);
      }
    }
  }
  echo '</div>';


  ?>



</main>

<?php
include "pie.php"
?>