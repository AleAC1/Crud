<?php 
	session_start();
	if (!$_SESSION["Ingreso"]) {
		header("location:index.php?ruta=ingreso");
		exit();
	}
 ?>
 <br>
	<h1>REGISTRAR UNA MULTA</h1>

	<form method="post">

		<input type="number" placeholder="IdPrestamo" name="IdPrestamoR" required>

		<input type="number" placeholder="CantidadMulta" name="CantidadMultaR" required>

		<input type="number" placeholder="EstadoMulta" name="EstadoMultaR" required>


		<input type="submit" value="Registrar">

</form>
<?php
	$registrar = new MultasC(); //EmpleadosC
	$registrar -> RegistrarMultasC();//RegistrarEmpleadosC
?>