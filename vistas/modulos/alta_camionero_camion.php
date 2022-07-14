<div class="jumbotron jumbotron-fluid" style="background-color: rgb(213, 57, 0); text-align: center; color: papayawhip;">
  <div class="container">
    <h1 class="display-4"><b><i class="fa-solid fa-file-pen"></i> Alta de camionero-camión</b></h1>
    <hr>
    <p class="lead"><b>Por favor llene los campos solicitados</p>
  </div>
</div>
<br><br>
<form method="POST" enctype="multipart/form-data" autocomplete="off">
    <!-- camionero -->
    <div class="mb-3">
        <label for="fk_camionero" class="form-label">Camionero:</label>
        <select class="form-select" aria-label="Default select example" name="fk_camionero" id="fk_camionero" required>
        <option value="">Seleccione...</option>
        <?php
            $consulta = Controlador::consultaCamioneroControlador();
            foreach($consulta as $datos => $valores)
            {
                echo '<option value="'.$valores["dni"].'">'.$valores["nombre"].' '.$valores["primer_apellido"].'</option>';
            }
        ?>
    </select>
    </div>
    <!-- camion -->
     <div class="mb-3">
        <label for="fk_camion" class="form-label">Camion/Matrícula:</label>
        <select class="form-select" aria-label="Default select example" name="fk_camion" id="fk_camion" required>
        <option value="">Seleccione...</option>
        <?php
            $consulta = Controlador::consultaCamionControlador();
            foreach($consulta as $datos => $valores)
            {
                echo '<option value="'.$valores["matricula"].'">'.$valores["matricula"].'</option>';
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
    <!--Botón-->
    <div class="d-grid gap-2 col-6 mx-auto">
        <button style="background-color: rgb(213, 57, 0); color: aliceblue;; font-size: 20px; font-weight: bold;" class="btn btn-warning" type="submit"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
    </div><br><br>
</form>
<?php
    $registro = new Controlador(); 
    $registro -> registroCamioneroCamionControlador();
?>