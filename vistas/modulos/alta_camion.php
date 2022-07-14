<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Alta camión</h1>
    <p class="lead">Por favor llene los campos solicitados</p>
  </div>
</div>
<br><br>
<form method="POST" enctype="multipart/form-data" autocomplete="off">
    <!--matricula-->
    <div class="mb-3">
        <label for="matricula" class="form-label">Matricula:</label>
        <input type="text" class="form-control" id="matricula" name="matricula" required>
    </div>
    <!--modelo-->
     <div class="mb-3">
        <label for="modelo" class="form-label">Modelo:</label>
        <input type="text" class="form-control" id="modelo" name="modelo" required>
    </div>
    <!--tipo-->
     <div class="mb-3">
        <label for="tipo" class="form-label">Tipo:</label>
        <input type="text" class="form-control" id="tipo" name="tipo" required>
    </div>
    <!--potencia-->
     <div class="mb-3">
        <label for="potencia" class="form-label">Potencia:</label>
        <input type="text" class="form-control" id="potencia" name="potencia" required>
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
    $registro -> registroCamionControlador();
?>