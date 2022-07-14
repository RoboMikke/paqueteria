<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Listado de Destinatarios</h1>
  </div>
</div>
<br><br>
<div>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Código</th>
                <th>Destinatario</th>
                <th>Dirección</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $categoria = new Controlador ();
                $categoria -> listadoDestinatarioControlador();
            ?>
        </tbody>
    </table>
</div>