<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Alta destinatario</h1>
    <p class="lead">Por favor llene los campos solicitados</p>
  </div>
</div>
<br><br>
<form method="POST" enctype="multipart/form-data" autocomplete="off">
   <!-- codigo -->
   <div class="mb-3">
        <label for="pk_destinatario" class="form-label">Codigo:</label>
        <input type="text" class="form-control" id="pk_destinatario" name="pk_destinatario" required>
    </div>
    <!-- destinatario -->
   <div class="mb-3">
        <label for="destinatario" class="form-label">Destinatario:</label>
        <input type="text" class="form-control" id="destinatario" name="destinatario" required>
    </div>
    <!-- direccion -->
   <div class="mb-3">
        <label for="direccion_destinatario" class="form-label">Dirección:</label>
        <input type="text" class="form-control" id="direccion_destinatario" name="direccion_destinatario" required>
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
    $registro -> registroDestinatarioControlador();
?>