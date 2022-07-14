<div class="jumbotron jumbotron-fluid" style="background-color: rgb(213, 57, 0); text-align: center; color: papayawhip;">
  <div class="container">
    <h1 class="display-4"><b><i class="fa-solid fa-file-pen"></i> Alta de camioneros</b></h1>
    <hr>
    <p class="lead"><b>Por favor llene los campos solicitados</p>
  </div>
</div>
<br><br>
<form method="POST" enctype="multipart/form-data" autocomplete="off">
    <!--dni-->
    <div class="mb-3">
        <label for="dni" class="form-label">DNI:</label>
        <input type="text" class="form-control" id="dni" name="dni" maxlength="9" pattern="[0-9]*[A-Z]" title="Cumpla con el formato de 8 números y 1 letra mayúscula" placeholder="32164578J" required>
    </div>
    <!--nombre-->
     <div class="mb-3">
        <label for="nombre" class="form-label">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" maxlength="20"  pattern="[a-zA-Z ]{2,254}" title="Escriba solo letras y un máximo de 20 caracteres" placeholder="Jose Luis" required>
    </div>
    <!-- primer apellido -->
     <div class="mb-3">
        <label for="primer_apellido" class="form-label">Primer apellido:</label>
        <input type="text" class="form-control" id="primer_apellido" name="primer_apellido" maxlength="20"  pattern="[a-zA-Z ]{2,254}"  title="Escriba solo letras y un máximo de 20 caracteres" placeholder="Carrillo" required>
    </div>
    <!-- segundo apellido -->
     <div class="mb-3">
        <label for="segundo_apellido" class="form-label">Segundo apellido:</label>
        <input type="text" class="form-control" id="segundo_apellido" name="segundo_apellido" maxlength="20"  pattern="[a-zA-Z ]{2,254}"  title="Escriba solo letras y un máximo de 20 caracteres" placeholder="Hinojosa" required>
    </div>
    <!-- telefono -->
    <div class="mb-3">
        <label for="telefono" class="form-label">Telefono:</label>
        <input type="text" class="form-control" id="telefono" name="telefono" maxlength="10" minlength="10"   min="1" pattern="^[0-9]+"  title="Escriba solo 10 números" placeholder="3231325302" required>
    </div>
    <!-- salario -->
    <div class="mb-3">
        <label for="salario" class="form-label">Salario mensual:</label>
        <input type="number" class="form-control" id="salario" name="salario" maxlength="10"  min="1" pattern="^[0-9]+" title="Escriba solo 10 números" placeholder="2500" required>
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
    <!--Botón-->
    <div class="d-grid gap-2 col-6 mx-auto">
        <button style="background-color: rgb(213, 57, 0); color: aliceblue;; font-size: 20px; font-weight: bold;" class="btn btn-warning" type="submit"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
    </div><br><br>
</form>

<script>
    function mayus(e) {

        var tecla=e.value;
        var tecla2=tecla.toUpperCase();

        alert(tecla2);
        }
</script>

<?php
    $registro = new Controlador(); 
    $registro -> registroCamioneroControlador();
?>
