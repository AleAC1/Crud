<?php 
	session_start();
	if (!$_SESSION["Ingreso"]) {
		header("location:index.php?ruta=ingreso");
		exit();
	}
 ?>
<br>
	<h1>Multas</h1>
	<li><a href="index.php?ruta=registrarmultas">Registrar Nueva Multa</a></li>
	<br>
	<table id="t1" border="1">
		
		<thead>
			
			<tr>
				<th>IdPrestamo</th>
				<th>CantidadMulta</th>
				<th>EstadoMulta</th>
				<!--<th>EstadoDevolucion</th>
				<th>Observaciones</th>-->
				<th></th>
				<th></th>

			</tr>

		</thead>

		<tbody>
			
			
			<?php
				$mostrar = new MultasC();
				$mostrar -> MostrarMultasC();
			?>

		</tbody>

	</table>

	<?php
		$eliminar = new MultasC();
		$eliminar -> BorrarMultasC();
	?>