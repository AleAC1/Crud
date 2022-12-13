<?php 
	session_start();
	if (!$_SESSION["Ingreso"]) {
		header("location:index.php?ruta=ingreso");
		exit();
	}
 ?>
<br>
	<h1>EDITAR UNA MULTA</h1>

	<form method="post">
		

		<?php
			$editar = new MultasC();
			$editar -> EditarMultasC();

			$actualizar = new MultasC();
			$actualizar -> ActualizarMultasC();
		?>

</form>