<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Alta población</h1>
    <p class="lead">Por favor llene los campos solicitados</p>
  </div>
</div>
<br><br>
<form method="POST" enctype="multipart/form-data" autocomplete="off">
   <!-- codigo -->
   <div class="mb-3">
        <label for="pk_poblacion" class="form-label">Codigo:</label>
        <input type="text" class="form-control" id="pk_poblacion" name="pk_poblacion" required>
    </div>
    <!-- provincia -->
   <div class="mb-3">
        <label for="poblacion" class="form-label">Poblacion:</label>
        <input type="text" class="form-control" id="poblacion" name="poblacion" required>
    </div>
    <br><br>
    <!--boton-->
    <div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-primary" type="submit">Guardar</button>
    </div>
    <br><br>
</form>
<?php
    $registro = new Controlador(); 
    $registro -> registroPoblacionControlador();
?>