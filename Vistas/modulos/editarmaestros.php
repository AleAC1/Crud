<?php 
	session_start();
	if (!$_SESSION["Ingreso"]) {
		header("location:index.php?ruta=ingreso");
		exit();
	}
 ?>
<br>
	<h1>EDITAR UN MAESTRO</h1>

	<form method="post">
		

		<?php
			$editar = new MaestrosC();
			$editar -> EditarMaestrosC();

			$actualizar = new MaestrosC();
			$actualizar -> ActualizarMaestrosC();
		?>

</form>