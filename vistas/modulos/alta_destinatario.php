<div class="jumbotron jumbotron-fluid" style="background-color: rgb(213, 57, 0); text-align: center; color: papayawhip;">
  <div class="container">
    <h1 class="display-4"><b><i class="fa-solid fa-file-pen"></i> Alta de destinatarios</b></h1>
    <hr>
    <p class="lead"><b>Por favor llene los campos solicitados</p>
  </div>
</div>
<br><br>
<form method="POST" enctype="multipart/form-data" autocomplete="off">
    <!-- destinatario -->
   <div class="mb-3">
        <label for="destinatario" class="form-label">Destinatario:</label>
        <input type="text" class="form-control" id="destinatario" name="destinatario" maxlength="30"  pattern="[a-zA-Z ]{2,254}"  title="Escriba solo letras y un máximo de 30 caracteres" placeholder="Hernan Villanueza" required>
    </div>
    <!-- direccion -->
   <div class="mb-3">
        <label for="direccion_destinatario" class="form-label">Dirección:</label>
        <input type="text" class="form-control" id="direccion_destinatario" name="direccion_destinatario"  placeholder="Catalunia #45" required>
    </div>
    <br><br>
    <!--Botón-->
    <div class="d-grid gap-2 col-6 mx-auto">
        <button style="background-color: rgb(213, 57, 0); color: aliceblue;; font-size: 20px; font-weight: bold;" class="btn btn-warning" type="submit"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
    </div><br><br>
</form>
<?php
    $registro = new Controlador(); 
    $registro -> registroDestinatarioControlador();
?>