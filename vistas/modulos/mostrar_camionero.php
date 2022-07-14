<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Listado de Camioneros</h1>
  </div>
</div>
<br><br>
<div>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Primer apellido</th>
                <th>Segundo apellido</th>
                <th>Telefono</th>
                <th>Salario</th>
                <th>Población</th>

                
</tr>
        </thead>
        <tbody>
            <?php
                $categoria = new Controlador ();
                $categoria -> listadoCamioneroControlador();
            ?>
        </tbody>
    </table>
</div>