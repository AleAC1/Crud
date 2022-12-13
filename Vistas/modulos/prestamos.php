<?php 
	session_start();
	if (!$_SESSION["Ingreso"]) {
		header("location:index.php?ruta=ingreso");
		exit();
	}
 ?>
<br>
	<h1>Prestamos</h1>
	<li><a href="index.php?ruta=registrar">Registrar Nuevo Prestamo</a></li>
	<br>
	<table id="t1" border="1">
		
		<thead>
			
			<tr>
				<th>IdPrestamo</th>
				<th>FechaPrestamo</th>
				<th>FechaDevolucion</th>
				<th>EstadoDevolucion</th>
				<th>Observaciones</th>
				<th></th>
				<th></th>

			</tr>

		</thead>

		<tbody>
			
			
			<?php
				$mostrar = new PrestamosC();
				$mostrar -> MostrarPrestamosC();
			?>

		</tbody>

	</table>

	<?php
		$eliminar = new PrestamosC();
		$eliminar -> BorrarPrestamosC();
	?>