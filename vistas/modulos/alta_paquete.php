<div class="jumbotron jumbotron-fluid" style="background-color: rgb(213, 57, 0); text-align: center; color: papayawhip;">
  <div class="container">
    <h1 class="display-4"><b><i class="fa-solid fa-file-pen"></i> Alta de paquetes</b></h1>
    <hr>
    <p class="lead"><b>Por favor llene los campos solicitados</p>
  </div>
</div>
<br><br>
<form method="POST" enctype="multipart/form-data" autocomplete="off">
    <!-- codigo paquete -->
    <div class="mb-3">
        <label for="codigo_paquete" class="form-label">Código:</label>
        <input type="text" class="form-control" id="codigo_paquete" name="codigo_paquete" maxlength="5" minlength="5" pattern="[0-9]*" title="Escriba solo 5 números" placeholder="13124" required>
    </div>
    <!-- descripcion -->
     <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción:</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion"  placeholder="Kit de desarmadores" required>
    </div>
    <!-- destinatario -->
    <div class="mb-3">
        <label for="fk_destinatario" class="form-label">Destinatario:</label>
        <select class="form-select" aria-label="Default select example" name="fk_destinatario" id="fk_destinatario" required>
        <option value="">Seleccione...</option>
        <?php
            $consulta = Controlador::consultaDestinatarioControlador();
            foreach($consulta as $datos => $valores)
            {
                echo '<option value="'.$valores["pk_destinatario"].'">'.$valores["destinatario"].'</option>';
            }
        ?>
    </select>
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
    <!-- provincia -->
    <div class="mb-3">
        <label for="fk_provincia" class="form-label">Provincia:</label>
        <select class="form-select" aria-label="Default select example" name="fk_provincia" id="fk_provincia" required>
        <option value="">Seleccione...</option>
        <?php
            $consulta = Controlador::consultaProvinciaControlador();
            foreach($consulta as $datos => $valores)
            {
                echo '<option value="'.$valores["codigo_provincia"].'">'.$valores["nombre_provincia"].'</option>';
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
    $registro -> registroPaqueteControlador();
?>