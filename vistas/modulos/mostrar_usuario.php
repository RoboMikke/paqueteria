<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Listado de Usuarios</h1>
  </div>
</div>
<br><br>
<div>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Usuario</th>
                <th>Rol</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $categoria = new Controlador ();
                $categoria -> listadoUsuarioControlador();
            ?>
        </tbody>
    </table>
</div>