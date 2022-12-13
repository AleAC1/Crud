<?php 
	session_start();
	if (!$_SESSION["Ingreso"]) {
		header("location:index.php?ruta=ingreso");
		exit();
	}
 ?>
<br>
	<h1>EDITAR UN PRESTAMO</h1>

	<form method="post">
		

		<?php
			$editar = new PrestamosC();
			$editar -> EditarPrestamosC();

			$actualizar = new PrestamosC();
			$actualizar -> ActualizarPrestamosC();
		?>

</form>