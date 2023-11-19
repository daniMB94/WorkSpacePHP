<main class="p-4">
  <div class="container">
    <form class="row justify-content-center bg-color-light" action="index.php" method="post">
      <div class="col-md-6">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre">
      </div>
      <div class="col-md-6">
        <label for="nickname" class="form-label">Nickname</label>
        <input type="text" class="form-control" id="nickname" name="nickname">
      </div>
      <div class="col-md-6">
        <label for="passwordC" class="form-label ">Password</label>
        <input type="password" class="form-control" id="passwordC" name="passwordC">
      </div>

      <div class="col-12">
        <button type="submit" class="btn btn-success" name="accion" value="enviarDatosRegistro">Sign up</button>
      </div>
    </form>
    <a href="index.php"><button class="btn btn-primary mt-2">Volver a página de inicio</button></a>
  </div>
</main>