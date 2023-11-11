<?php

echo "<div class='container'>";

?>

<form class="w-75" action="index.php" method="post">
    <div class="mb-3">
        <label for="modelo" class="form-label">modelo</label>
        <input type="text" class="form-control" id="modelo" name="modelo">
    </div>
    <div class="mb-3">
        <label for="pista" class="form-label">pista</label>
        <input type="text" class="form-control" id="pista" name="pista">
    </div>
    <div class="mb-3">
        <label for="tiempoVuelta" class="form-label">tiempoVuelta</label>
        <input type="text" class="form-control" id="tiempoVuelta" name="tiempoVuelta">
    </div>
    <div class="mb-3">
        <label for="numeroColisiones" class="form-label">numeroColisiones</label>
        <input type="text" class="form-control" id="numeroColisiones" name="numeroColisiones">
    </div>
    <button type="submit" class="btn btn-primary" name="accion" value="recibirFormNuevoResultado">Submit</button>
</form>

<?php

echo "</div>";

include "piePrincipal.php";

?>