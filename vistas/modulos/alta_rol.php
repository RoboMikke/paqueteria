<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Alta rol</h1>
    <p class="lead">Por favor llene los campos solicitados</p>
  </div>
</div>
<br><br>
<form method="POST" enctype="multipart/form-data" autocomplete="off">
   <!-- codigo -->
   <div class="mb-3">
        <label for="pk_role" class="form-label">Código:</label>
        <input type="text" class="form-control" id="pk_role" name="pk_role" required>
    </div>
    <!-- rol -->
   <div class="mb-3">
        <label for="rol" class="form-label">Rol:</label>
        <input type="text" class="form-control" id="rol" name="rol" required>
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
    $registro -> registroRolControlador();
?>