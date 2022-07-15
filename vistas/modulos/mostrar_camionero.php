<div class="jumbotron jumbotron-fluid" style="background-color: rgb(213, 57, 0); text-align: center; color: papayawhip;">
  <div class="container">
    <h1 class="display-4"><b><i class="fa-solid fa-clipboard-list"></i> Listado de Camioneros</b></h1>
    <hr>
    <p class="lead"><b>Paquetería España</b></p>
  </div>
</div>
<br><br>
<div>
    <table id="example" style="width:100%" class="table table-hover table-striped">
        <thead>
            <tr>
                <th>DNI</th>
                <th>Nombre del Camionero</th>
                <th>Primer apellido</th>
                <th>Segundo apellido</th>
                <th>Telefono</th>
                <th>Salario(Euros/Hora)</th>
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