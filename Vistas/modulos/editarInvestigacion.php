<?php 
	session_start();
	if (!$_SESSION["Ingreso"]) {
		header("location:index.php?ruta=ingreso");
		exit();
	}
 ?>
<br>
	<h1>EDITAR UN ALUMNO</h1>

	<form method="post">
		

		<?php
			$editar = new AlumnosC();
			$editar -> EditarAlumnosC();

			$actualizar = new AlumnosC();
			$actualizar -> ActualizarAlumnosC();
		?>

</form>