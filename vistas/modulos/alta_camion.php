<div class="jumbotron jumbotron-fluid" style="background-color: rgb(213, 57, 0); text-align: center; color: papayawhip;">
  <div class="container">
    <h1 class="display-4"><b><i class="fa-solid fa-file-pen"></i> Alta de camiones</b></h1>
    <hr>
    <p class="lead"><b>Por favor llene los campos solicitados</p>
  </div>
</div>
<br><br>
<form method="POST" enctype="multipart/form-data" autocomplete="off">
    <!--matricula-->
    <div class="mb-3">
        <label for="matricula" class="form-label">Matricula:</label>
        <input type="text" class="form-control" id="matricula" name="matricula" minlength="7" maxlength="7"  pattern="[0-9]*[0-9]*[0-9]*[0-9]*[A-Z]*[A-Z]*[A-Z]" title="Escriba 4 numeros y 3 letras mayúsculas" placeholder="3125LMJ" required>
    </div>
    <!--modelo-->
     <div class="mb-3">
        <label for="modelo" class="form-label">Modelo:</label>
        <input type="text" class="form-control" id="modelo" name="modelo" maxlength="20" title="Escriba solo letras y un máximo de 20 caracteres" placeholder="MS-4315" required>
    </div>
    <!--tipo-->
     <div class="mb-3">
        <label for="tipo" class="form-label">Tipo:</label>
        <input type="text" class="form-control" id="tipo" name="tipo" maxlength="20"  pattern="[a-zA-Z ]{2,254}"  title="Escriba solo letras y un máximo de 20 caracteres" placeholder="rigido" required>
    </div>
    <!--potencia-->
     <div class="mb-3">
        <label for="potencia" class="form-label">Potencia:</label>
        <input type="number" class="form-control" id="potencia" name="potencia" maxlength="20" min="1" pattern="^[0-9]+"  title="Escriba solo números positivos" placeholder="350" required>
    </div>
    <br><br>
    <!--Botón-->
    <div class="d-grid gap-2 col-6 mx-auto">
        <button style="background-color: rgb(213, 57, 0); color: aliceblue;; font-size: 20px; font-weight: bold;" class="btn btn-warning" type="submit"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
    </div><br><br>
</form>
<?php
    $registro = new Controlador(); 
    $registro -> registroCamionControlador();
?>