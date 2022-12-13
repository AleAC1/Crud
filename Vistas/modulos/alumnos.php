<?php 
	session_start();
	if (!$_SESSION["Ingreso"]) {
		header("location:index.php?ruta=ingreso");
		exit();
	}
	if (isset($_GET["idB"])){
		header("location:index.php?ruta=alumnos");
	}
 ?>
<br>
	<h1>ALUMNOS</h1>
	<li><a href="index.php?ruta=registrarAlumno">Registrar Nuevo alumno</a></li>
	<br>
	<table id="t1" border="1">
		
		<thead>
			
			<tr>
				<th>No. Control</th>
				<th>Nombre Alumno</th>
				<th>Apellido Paterno</th>
				<th>Apellido Materno</th>
				<th>Fecha Nacimiento</th>
				<th>Direccion</th>
				<th>Núm. Casa</th>
                <th>Sexo</th>
                <th>Carrera</th>
                <th>Semestre</th>
                <th></th>
                <th></th>
			</tr>

		</thead>

		<tbody>						
			<?php
				$mostrar = new AlumnosC();
				$mostrar -> MostrarAlumnosC();
			?>
		</tbody>
	</table>
	<?php
		$eliminar = new AlumnosC();
		$eliminar -> BorrarAlumnosC();
	?>