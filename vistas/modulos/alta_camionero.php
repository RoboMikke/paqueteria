<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Alta camionero</h1>
    <p class="lead">Por favor llene los campos solicitados</p>
  </div>
</div>
<br><br>
<form method="POST" enctype="multipart/form-data" autocomplete="off">
    <!--dni-->
    <div class="mb-3">
        <label for="dni" class="form-label">DNI:</label>
        <input type="text" maxlength="9" class="form-control" id="dni" name="dni" required>
    </div>
    <!--nombre-->
     <div class="mb-3">
        <label for="nombre" class="form-label">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required>
    </div>
    <!-- primer apellido -->
     <div class="mb-3">
        <label for="primer_apellido" class="form-label">Primer apellido:</label>
        <input type="text" class="form-control" id="primer_apellido" name="primer_apellido" required>
    </div>
    <!-- segundo apellido -->
     <div class="mb-3">
        <label for="segundo_apellido" class="form-label">Segundo apellido:</label>
        <input type="text" class="form-control" id="segundo_apellido" name="segundo_apellido" required>
    </div>
    <!-- telefono -->
    <div class="mb-3">
        <label for="telefono" class="form-label">Telefono:</label>
        <input type="number" class="form-control" id="telefono" name="telefono" required>
    </div>
    <!-- salario -->
    <div class="mb-3">
        <label for="salario" class="form-label">Salario:</label>
        <input type="text" class="form-control" id="salario" name="salario" required>
    </div>
    <!-- poblacion -->
    <div class="mb-3">
        <label for="fk_poblacion" class="form-label">Población:</label>
        <select class="form-select" aria-label="Default select example" name="fk_poblacion" id="fk_poblacion" required>
        <option value="">Seleccione...</option>
        <?php
            $consulta = Controlador::consultaPoblacionControlador();
            foreach($consulta as $datos => $valores)
            {
                echo '<option value="'.$valores["pk_poblacion"].'">'.$valores["poblacion"].'</option>';
            }
        ?>
    </select>
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
    $registro -> registroCamioneroControlador();
?>