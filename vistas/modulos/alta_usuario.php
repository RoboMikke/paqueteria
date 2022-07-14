<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Alta usuario</h1>
    <p class="lead">Por favor llene los campos solicitados</p>
  </div>
</div>
<br><br>
<form method="POST" enctype="multipart/form-data" autocomplete="off">
    <!-- usuario -->
    <div class="mb-3">
        <label for="usuario" class="form-label">Usuario:</label>
        <input type="text" class="form-control" id="usuario" name="usuario" required>
    </div>
    <!-- contrasenia -->
     <div class="mb-3">
        <label for="contrasenia" class="form-label">Contraseña:</label>
        <input type="text" class="form-control" id="contrasenia" name="contrasenia" required>
    </div>
    <!-- Rol -->
    <div class="mb-3">
        <label for="fk_role" class="form-label">Rol:</label>
        <select class="form-select" aria-label="Default select example" name="fk_role" id="fk_role" required>
        <option value="">Seleccione...</option>
        <?php
            $consulta = Controlador::consultaUsuarioControlador();
            foreach($consulta as $datos => $valores)
            {
                echo '<option value="'.$valores["pk_role"].'">'.$valores["rol"].'</option>';
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
    $registro -> registroUsuarioControlador();
?>