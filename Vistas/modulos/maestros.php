<?php 
	session_start();
	if (!$_SESSION["Ingreso"]) {
		header("location:index.php?ruta=ingreso");
		exit();		
	}
	if (isset($_GET["idB"])){
		header("location:index.php?ruta=maestros");
	}
 ?>
 
<br>
	<h1>Maestros</h1>
	<li><a href="index.php?ruta=registrarmaestros">Registrar Nuevo Maestro</a></li>
	<br>
	<table id="t1" border="1">
		
		<thead>
			
			<tr>
				<th>RFC</th>
				<th>NombreMaestro</th>
				<th>ApellidoP</th>
				<th>ApellidoM</th>
				<th>FechaNacimiento</th>
				<th>EstadoCivil</th>
				<th>Sexo</th>
				<th>AreaMaestro</th>
				<th>CurpMaestro</th>
				<th>GradoEstudio</th>
				<th></th>
				<th></th>

			</tr>

		</thead>

		<tbody>
			
			
			<?php
				$mostrar = new MaestrosC();
				$mostrar -> MostrarMaestrosC();
			?>

		</tbody>

	</table>

	<?php
		$eliminar = new MaestrosC();
		$eliminar -> BorrarMaestrosC();
	?>