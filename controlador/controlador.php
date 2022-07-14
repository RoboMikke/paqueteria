<?php 
class Controlador 
{
	#llamar plantilla
	#-----------------------
	static public function pagina()
	{
		include "vistas/plantilla.php";
	}

	#llamar modulos
	#------------------------------
	static public function enlacesPaginasControlador()
	{
		if(isset($_GET['opcion']))
		{
			$enlace = $_GET['opcion'];
		}
		else
		{
			$enlace = "principal";
		}

		$respuesta = Paginas::enlacesPaginasModelo($enlace);

		include $respuesta;
	}

	#consulta camion
	#-----------------------------------------
	static public function consultaCamionControlador()
	{
		$tabla = 'camion';
		$respuesta = Modelo::consultaCamionModelo($tabla);

		return $respuesta;
	}
	#consulta camionero
	#-----------------------------------------
	static public function consultaCamioneroControlador()
	{
		$tabla = 'camionero';
		$respuesta = Modelo::consultaCamioneroModelo($tabla);

		return $respuesta;
	}
	#consulta destinatario
	#-----------------------------------------
	static public function consultaDestinatarioControlador()
	{
		$tabla = 'destinatario';
		$respuesta = Modelo::consultaDestinatarioModelo($tabla);

		return $respuesta;
	}
	#consulta provincia
	#-----------------------------------------
	static public function consultaProvinciaControlador()
	{
		$tabla = 'provincia';
		$respuesta = Modelo::consultaProvinciaModelo($tabla);

		return $respuesta;
	}
	#consulta poblacion
	#-----------------------------------------
	static public function consultaPoblacionControlador()
	{
		$tabla = 'poblacion';
		$respuesta = Modelo::consultaPoblacionModelo($tabla);

		return $respuesta;
	}
	
	#consulta usuario
	#-----------------------------------------
	static public function consultaUsuarioControlador()
	{
		$tabla = 'rol';
		$respuesta = Modelo::consultaUsuarioModelo($tabla);

		return $respuesta;
	}
	
	#registro camion
	#--------------------------------
	static public function registroCamionControlador()
	{
		if(isset($_POST['matricula']))
		{
			$tabla = "camion";

			$datosControlador = array("matricula"=>$_POST['matricula'],"modelo"=>$_POST['modelo'],
			"tipo"=>$_POST['tipo'],"potencia"=>$_POST['potencia']);
			
			$respuesta = Modelo::registroCamionModelo($datosControlador, $tabla);

			if($respuesta == 'ok')
			{
				?>
				<script>
					Swal.fire({
						  position: 'top-end',
						  icon: 'success',
						  title: 'Se guardaron los datos correctamente',
						  showConfirmButton: false,
						  timer: 1500
						})
				</script>
				<?php
			}
			else 
			{
				?>
				<script>
					Swal.fire({
					  icon: 'error',
					  title: 'No se guardaron los datos',
					  text: 'Something went wrong!'
					})
				</script>
				<?php
			}

		}
	}
	#listado camion
	#----------------------------------
	static public function listadoCamionControlador()
	{
		$respuesta = Modelo::listadoCamionModelo("camion");

		foreach ($respuesta as $renglon => $valores) 
		{
			?>
				<tr>
					<td><?php echo $valores['matricula']; ?></td>
					<td><?php echo $valores['modelo']; ?></td>
					<td><?php echo $valores['tipo']; ?></td>
					<td><?php echo $valores['potencia']; ?></td>
				</tr>
			<?php
		}
	}
	#registro camionero
	#--------------------------------
	static public function registroCamioneroControlador()
	{
		if(isset($_POST['dni']))
		{
			$tabla = "camionero";
			$dni = $_POST['dni'];
			$nombre = $_POST['nombre'];
			$primer_apellido = $_POST['primer_apellido'];
			$segundo_apellido = $_POST['segundo_apellido'];
			$telefono = $_POST['telefono'];
			$salario = $_POST['salario'];
			$fk_poblacion = $_POST['fk_poblacion'];

			//$datosControlador = array("dni"=>$_POST['dni']);
			//$datosControlador = array("nombre"=>$_POST['nombre']);
			//$datosControlador = array("primer_apellido"=>$_POST['primer_apellido']);
			//$datosControlador = array("segundo_apellido"=>$_POST['segundo_apellido']);
			//$datosControlador = array("telefono"=>$_POST['telefono']);
			//$datosControlador = array("salario"=>$_POST['salario']);
			//$datosControlador = array("fk_poblacion"=>$_POST['fk_poblacion']);

			$respuesta = Modelo::registroCamioneroModelo($dni, $nombre, $primer_apellido, $segundo_apellido,
			 $telefono, $salario, $fk_poblacion, $tabla);

			if($respuesta == 'ok')
			{
				?>
				<script>
					Swal.fire({
						  position: 'top-end',
						  icon: 'success',
						  title: 'Se guardaron los datos correctamente',
						  showConfirmButton: false,
						  timer: 1500
						})
				</script>
				<?php
			}
			else 
			{
				?>
				<script>
					Swal.fire({
					  icon: 'error',
					  title: 'No se guardaron los datos',
					  text: 'Something went wrong!'
					})
				</script>
				<?php
			}

		}
	}
	#listado camionero
	#----------------------------------
	static public function listadoCamioneroControlador()
	{
		$respuesta = Modelo::listadoCamioneroModelo("camionero");

		foreach ($respuesta as $renglon => $valores) 
		{
			?>
				<tr>
					<td><?php echo $valores['dni']; ?></td>
					<td><?php echo $valores['nombre']; ?></td>
					<td><?php echo $valores['primer_apellido']; ?></td>
					<td><?php echo $valores['segundo_apellido']; ?></td>
					<td><?php echo $valores['telefono']; ?></td>
					<td><?php echo $valores['salario']; ?></td>
					<td><?php echo $valores['fk_poblacion']; ?></td>
				</tr>
			<?php
		}
	}
	#registro camionero camion
	#----------------------------------
	static public function registroCamioneroCamionControlador()
	{
		if(isset($_POST['pk_camionero_camion']))
		{
			$tabla = "camionero_camion";

			$datosControlador = array("pk_camionero_camion"=>$_POST['pk_camionero_camion'], "fk_camionero"=>$_POST['fk_camionero'], 
			"fk_camion"=>$_POST['fk_camion'], "fecha"=>$_POST['fecha']);

			$respuesta = Modelo::registroCamioneroCamionModelo($datosControlador, $tabla);

			if($respuesta == 'ok')
			{
				?>
				<script>
					Swal.fire({
						  position: 'top-end',
						  icon: 'success',
						  title: 'Se guardaron los datos correctamente',
						  showConfirmButton: false,
						  timer: 1500
						})
				</script>
				<?php
			}
			else 
			{
				?>
				<script>
					Swal.fire({
					  icon: 'error',
					  title: 'No se guardaron los datos',
					  text: 'Something went wrong!'
					})
				</script>
				<?php
			}

		}
	}
	#listado camionero camion
	#----------------------------------
	static public function listadoCamioneroCamionControlador()
	{
		$respuesta = Modelo::listadoCamioneroCamionModelo("camionero_camion");

		foreach ($respuesta as $renglon => $valores) 
		{
			?>
				<tr>
					<td><?php echo $valores['pk_camionero_camion']; ?></td>
					<td><?php echo $valores['fk_camionero'];?></td>
					<td><?php echo $valores['fk_camion']; ?></td>
					<td><?php echo $valores['fecha']; ?></td>
				</tr>
			<?php
		}
	}
	#registro destinatario
	#----------------------------------
	static public function registroDestinatarioControlador()
	{
		if(isset($_POST['pk_destinatario']))
		{
			$tabla = "destinatario";

			$datosControlador = array("pk_destinatario"=>$_POST['pk_destinatario'], "destinatario"=>$_POST['destinatario'],
			"direccion_destinatario"=>$_POST['direccion_destinatario']);

			$respuesta = Modelo::registroDestinatarioModelo($datosControlador, $tabla);

			if($respuesta == 'ok')
			{
				?>
				<script>
					Swal.fire({
						  position: 'top-end',
						  icon: 'success',
						  title: 'Se guardaron los datos correctamente',
						  showConfirmButton: false,
						  timer: 1500
						})
				</script>
				<?php
			}
			else 
			{
				?>
				<script>
					Swal.fire({
					  icon: 'error',
					  title: 'No se guardaron los datos',
					  text: 'Something went wrong!'
					})
				</script>
				<?php
			}

		}
	}

	#listado destinatario
	#----------------------------------
	static public function listadoDestinatarioControlador()
	{
		$respuesta = Modelo::listadoDestinatarioModelo("destinatario");

		foreach ($respuesta as $renglon => $valores) 
		{
			?>
				<tr>
					<td><?php echo $valores['pk_destinatario']; ?></td>
					<td><?php echo $valores['destinatario']; ?></td>
					<td><?php echo $valores['direccion_destinatario']; ?></td>
				</tr>
			<?php
		}
	}

	#registro provincia
	#----------------------------------
	static public function registroProvinciaControlador()
	{
		if(isset($_POST['codigo_provincia']))
		{
			$tabla = "provincia";

			$datosControlador = array("codigo_provincia"=>$_POST['codigo_provincia'], "nombre_provincia"=>$_POST['nombre_provincia']);

			$respuesta = Modelo::registroProvinciaModelo($datosControlador, $tabla);

			if($respuesta == 'ok')
			{
				?>
				<script>
					Swal.fire({
						  position: 'top-end',
						  icon: 'success',
						  title: 'Se guardaron los datos correctamente',
						  showConfirmButton: false,
						  timer: 1500
						})
				</script>
				<?php
			}
			else 
			{
				?>
				<script>
					Swal.fire({
					  icon: 'error',
					  title: 'No se guardaron los datos',
					  text: 'Something went wrong!'
					})
				</script>
				<?php
			}

		}
	}

	#listado provincia 
	#----------------------------------
	static public function listadoProvinciaControlador()
	{
		$respuesta = Modelo::listadoProvinciaModelo("provincia");

		foreach ($respuesta as $renglon => $valores) 
		{
			?>
				<tr>
					<td><?php echo $valores['codigo_provincia']; ?></td>
					<td><?php echo $valores['nombre_provincia']; ?></td>
				</tr>
			<?php
		}
	}
	#registro poblacion
	#----------------------------------
	static public function registroPoblacionControlador()
	{
		if(isset($_POST['pk_poblacion']))
		{
			$tabla = "poblacion";

			$datosControlador = array("pk_poblacion"=>$_POST['pk_poblacion'], "poblacion"=>$_POST['poblacion']);

			$respuesta = Modelo::registroPoblacionModelo($datosControlador, $tabla);

			if($respuesta == 'ok')
			{
				?>
				<script>
					Swal.fire({
						  position: 'top-end',
						  icon: 'success',
						  title: 'Se guardaron los datos correctamente',
						  showConfirmButton: false,
						  timer: 1500
						})
				</script>
				<?php
			}
			else 
			{
				?>
				<script>
					Swal.fire({
					  icon: 'error',
					  title: 'No se guardaron los datos',
					  text: 'Something went wrong!'
					})
				</script>
				<?php
			}

		}
	}

	#listado poblacion
	#----------------------------------
	static public function listadoPoblacionControlador()
	{
		$respuesta = Modelo::listadoPoblacionModelo("poblacion");

		foreach ($respuesta as $renglon => $valores) 
		{
			?>
				<tr>
					<td><?php echo $valores['pk_poblacion']; ?></td>
					<td><?php echo $valores['poblacion']; ?></td>
				</tr>
			<?php
		}
	}
	#registro rol
	#----------------------------------
	static public function registroRolControlador()
	{
		if(isset($_POST['pk_role']))
		{
			$tabla = "rol";

			$datosControlador = array("pk_role"=>$_POST['pk_role'], "rol"=>$_POST['rol']);

			$respuesta = Modelo::registroRolModelo($datosControlador, $tabla);

			if($respuesta == 'ok')
			{
				?>
				<script>
					Swal.fire({
						  position: 'top-end',
						  icon: 'success',
						  title: 'Se guardaron los datos correctamente',
						  showConfirmButton: false,
						  timer: 1500
						})
				</script>
				<?php
			}
			else 
			{
				?>
				<script>
					Swal.fire({
					  icon: 'error',
					  title: 'No se guardaron los datos',
					  text: 'Something went wrong!'
					})
				</script>
				<?php
			}

		}
	}

	#listado rol
	#----------------------------------
	static public function listadoRolControlador()
	{
		$respuesta = Modelo::listadoRolModelo("rol");

		foreach ($respuesta as $renglon => $valores) 
		{
			?>
				<tr>
					<td><?php echo $valores['pk_role']; ?></td>
					<td><?php echo $valores['rol']; ?></td>
				</tr>
			<?php
		}
	}
	#registro usuario
	#----------------------------------
	static public function registroUsuarioControlador()
	{
		if(isset($_POST['usuario']))
		{
			$tabla = "usuario";

			$datosControlador = array("usuario"=>$_POST['usuario'], "contrasenia"=>$_POST['contrasenia'],
			"fk_role"=>$_POST['fk_role']);

			$respuesta = Modelo::registroUsuarioModelo($datosControlador, $tabla);

			if($respuesta == 'ok')
			{
				?>
				<script>
					Swal.fire({
						  position: 'top-end',
						  icon: 'success',
						  title: 'Se guardaron los datos correctamente',
						  showConfirmButton: false,
						  timer: 1500
						})
				</script>
				<?php
			}
			else 
			{
				?>
				<script>
					Swal.fire({
					  icon: 'error',
					  title: 'No se guardaron los datos',
					  text: 'Something went wrong!'
					})
				</script>
				<?php
			}

		}
	}

	#listado usuario
	#----------------------------------
	static public function listadoUsuarioControlador()
	{
		$respuesta = Modelo::listadoUsuarioModelo("usuario");

		foreach ($respuesta as $renglon => $valores) 
		{
			?>
				<tr>
					<td><?php echo $valores['usuario']; ?></td>
					<td><?php echo $valores['fk_role']; ?></td>
				</tr>
			<?php
		}
	}
	#registro usuario
	#----------------------------------
	static public function registroPaqueteControlador()
	{
		if(isset($_POST['codigo_paquete']))
		{
			$tabla = "paquete";

			$datosControlador = array("codigo_paquete"=>$_POST['codigo_paquete'], "descripcion"=>$_POST['descripcion'],
			"fk_destinatario"=>$_POST['fk_destinatario'],"fk_camionero"=>$_POST['fk_camionero'],"fk_provincia"=>$_POST['fk_provincia']);

			$respuesta = Modelo::registroPaqueteModelo($datosControlador, $tabla);

			if($respuesta == 'ok')
			{
				?>
				<script>
					Swal.fire({
						  position: 'top-end',
						  icon: 'success',
						  title: 'Se guardaron los datos correctamente',
						  showConfirmButton: false,
						  timer: 1500
						})
				</script>
				<?php
			}
			else 
			{
				?>
				<script>
					Swal.fire({
					  icon: 'error',
					  title: 'No se guardaron los datos',
					  text: 'Something went wrong!'
					})
				</script>
				<?php
			}

		}
	}

	#listado paquete
	#----------------------------------
	static public function listadoPaqueteControlador()
	{
		$respuesta = Modelo::listadoPaqueteModelo("paquete");

		foreach ($respuesta as $renglon => $valores) 
		{
			?>
				<tr>
					<td><?php echo $valores['codigo_paquete']; ?></td>
					<td><?php echo $valores['descripcion']; ?></td>
					<td><?php echo $valores['fk_destinatario']; ?></td>
					<td><?php echo $valores['fk_camionero']; ?></td>
					<td><?php echo $valores['fk_provincia']; ?></td>
				</tr>
			<?php
		}
	}
}