<div class="jumbotron jumbotron-fluid" style="background-color: rgb(213, 57, 0); text-align: center; color: papayawhip;">
  <div class="container">
    <h1 class="display-4"><b><i class="fa-solid fa-file-pen"></i> Alta de provincias</b></h1>
    <hr>
    <p class="lead"><b>Por favor llene los campos solicitados</p>
  </div>
</div>
<br><br>
<form method="POST" enctype="multipart/form-data" autocomplete="off">
  <!-- codigo provincia -->
  <div class="mb-3">
        <label for="codigo_provincia" class="form-label">Código de Provincia:</label>
        <input type="text" class="form-control" id="codigo_provincia" name="codigo_provincia" maxlength="5" minlength="5" pattern="[0-9]*" title="Escriba solo 5 números"placeholder="15615" required>
    </div>
    <!-- provincia -->
   <div class="mb-3">
        <label for="nombre_provincia" class="form-label">Provincia:</label>
        <input type="text" class="form-control" id="nombre_provincia" name="nombre_provincia" maxlength="20"  pattern="[a-zA-Z ]{2,254}"  title="Escriba solo letras y un máximo de 20 caracteres" placeholder="Albacete" required>
    </div>
    <br><br>
    <!--Botón-->
    <div class="d-grid gap-2 col-6 mx-auto">
        <button style="background-color: rgb(213, 57, 0); color: aliceblue;; font-size: 20px; font-weight: bold;" class="btn btn-warning" type="submit"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
    </div><br><br>
</form>
<?php
    $registro = new Controlador(); 
    $registro -> registroProvinciaControlador();
?>