<div class="jumbotron jumbotron-fluid" style="background-color: rgb(213, 57, 0); text-align: center; color: papayawhip;">
  <div class="container">
    <h1 class="display-4"><b><i class="fa-solid fa-clipboard-list"></i> Listado de Camiones</b></h1>
    <hr>
    <p class="lead"><b>Paquetería España</b></p>
  </div>
</div>
<br><br>
<div>
    <table  id="example" style="width:100%" class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Matricula del Camión</th>
                <th>Modelo del Camión</th>
                <th>Tipo de Camión</th>
                <th>Potencia HP</th>
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

