<div class="jumbotron jumbotron-fluid" style="background-color: rgb(213, 57, 0); text-align: center; color: papayawhip;">
  <div class="container">
    <h1 class="display-4"><b><i class="fa-solid fa-file-pen"></i> Alta de usuarios</b></h1>
    <hr>
    <p class="lead"><b>Por favor llene los campos solicitados</p>
  </div>
</div>
<br><br>
<form method="POST" enctype="multipart/form-data" autocomplete="off">
    <!-- usuario -->
    <div class="mb-3">
        <label for="usuario" class="form-label">Usuario:</label>
        <input type="text" class="form-control" id="usuario" name="usuario" maxlength="10"  title="Escriba un máximo de 10 caracteres" placeholder="usuario123" required>
    </div>
    <!-- contrasenia -->
     <div class="mb-3">
        <label for="contrasenia" class="form-label">Contraseña:</label>
        <input type="password" class="form-control" id="contrasenia" name="contrasenia" required>
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
    <!--Botón-->
    <div class="d-grid gap-2 col-6 mx-auto">
        <button style="background-color: rgb(213, 57, 0); color: aliceblue;; font-size: 20px; font-weight: bold;" class="btn btn-warning" type="submit"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
    </div><br><br>
</form>
<?php
    $registro = new Controlador(); 
    $registro -> registroUsuarioControlador();
?>