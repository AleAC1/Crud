<?php 
	session_start();
	if (!$_SESSION["Ingreso"]) {
		header("location:index.php?ruta=ingreso");
        exit();
	}
 ?>
<br>
	<h1>Prestamos de Libros</h1>
	<h3>*El Registro de nuevo Prestamo de Libro y el Boton Renovar estan hechos con procedimientos Almacenados*</h3>
	Puede requerir presionar los botones más de una vez para ver algunos cambios
	<br>
	<li><a href="index.php?ruta=registrarPrestamoLibro">Registrar Nuevo Prestamo de Libro</a></li>
	<br>
	<table id="t1" border="1">
		
		<thead>
			
			<tr>
				<th>IdPrestamo</th>
				<th>FechaPrestamo</th>
				<th>FechaDevolucion</th>
				<th>EstadoDevolución</th>
				<th>Observaciones</th>
                <th>IdLibro</th>
				<th>NoControl</th>     
				<th></th>        			        
				<th></th>				
				<th></th>

			</tr>

		</thead>

		<tbody>
			
			
			<?php
				$mostrar = new PrestamoLibroC();
				$mostrar -> MostrarPrestamoLibroC();
			?>

		</tbody>

	</table>

	<?php
		$eliminar = new PrestamoLibroC();
		$eliminar -> BorrarPrestamoLibroC();
	?>