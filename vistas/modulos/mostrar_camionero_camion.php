<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Listado de Camionero Camión</h1>
  </div>
</div>
<br><br>
<div>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Código</th>
                <th>Camionero</th>
                <th>Camion</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $categoria = new Controlador ();
                $categoria -> listadoCamioneroCamionControlador();
            ?>
        </tbody>
    </table>
</div>