<?php 
	session_start();
	if (!$_SESSION["Ingreso"]) {
		header("location:index.php?ruta=ingreso");
		exit();
	}
 ?>
<br>
	<h1>RENOVACIÓN PRESTAMO</h1>

	<form method="post">
		

		<?php
			$editar = new PrestamoLibroC();
			$editar -> EditarPrestamoLibroC();

			$actualizar = new PrestamoLibroC();
			$actualizar -> ActualizarPrestamoLibroC();
		?>
        
</form>