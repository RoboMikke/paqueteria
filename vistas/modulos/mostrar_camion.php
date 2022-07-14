<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Listado de Camiones</h1>
  </div>
</div>
<br><br>
<div>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Matricula</th>
                <th>Modelo</th>
                <th>Tipo</th>
                <th>Potencia</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $categoria = new Controlador ();
                $categoria -> listadoCamionControlador();
            ?>
        </tbody>
    </table>
</div>