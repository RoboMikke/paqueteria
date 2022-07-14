<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Listado de Roles</h1>
  </div>
</div>
<br><br>
<div>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Código</th>
                <th>Rol</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $categoria = new Controlador ();
                $categoria -> listadoRolControlador();
            ?>
        </tbody>
    </table>
</div>