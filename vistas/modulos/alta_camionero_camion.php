<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Alta camionero camión</h1>
    <p class="lead">Por favor llene los campos solicitados</p>
  </div>
</div>
<br><br>
<form method="POST" enctype="multipart/form-data" autocomplete="off">
   <!-- codigo -->
   <div class="mb-3">
        <label for="pk_camionero_camion" class="form-label">Codigo:</label>
        <input type="text" class="form-control" id="pk_camionero_camion" name="pk_camionero_camion" required>
    </div>
    <!-- camionero -->
    <div class="mb-3">
        <label for="fk_camionero" class="form-label">Camionero:</label>
        <select class="form-select" aria-label="Default select example" name="fk_camionero" id="fk_camionero" required>
        <option value="">Seleccione...</option>
        <?php
            $consulta = Controlador::consultaCamioneroControlador();
            foreach($consulta as $datos => $valores)
            {
                echo '<option value="'.$valores["dni"].'">'.$valores["nombre"].$valores["primer_apellido"].'</option>';
            }
        ?>
    </select>
    </div>
    <!-- camion -->
     <div class="mb-3">
        <label for="fk_camion" class="form-label">Camion:</label>
        <select class="form-select" aria-label="Default select example" name="fk_camion" id="fk_camion" required>
        <option value="">Seleccione...</option>
        <?php
            $consulta = Controlador::consultaCamionControlador();
            foreach($consulta as $datos => $valores)
            {
                echo '<option value="'.$valores["matricula"].'">'.$valores["matricula"].$valores["modelo"].'</option>';
            }
        ?>
    </select>
    </div>
    <!--fecha-->
    <div class="mb-3">
        <label for="fecha" class="form-label">Fecha:</label>
        <input type="date" class="form-control" id="fecha" name="fecha" required>
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
    $registro -> registroCamioneroCamionControlador();
?>