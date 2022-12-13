<?php 
	session_start();
	if (!$_SESSION["Ingreso"]) {
		header("location:index.php?ruta=ingreso");
		exit();
	}
 ?>
<br>
	<h1>REGISTRAR UN PRESTAMO</h1>

	<form method="post">

		<input type="int" placeholder="IdPrestamo" name="id_prestamoR" required>

		<input type="date" placeholder="FechaPrestamo" name="FechaPrestamoR" required>

		<input type="date" placeholder="FechaDevolucion" name="FechaDevolucionR" required>

		<input type="number" placeholder="EstadoDevolucion" name="EstadoDevolucionR" required>

		<input type="text" placeholder="Observaciones" name="ObservacionesR" >

		<input type="submit" value="Registrar">

</form>
<?php
	$registrar = new PrestamosC(); //EmpleadosC
	$registrar -> RegistrarPrestamosC();//RegistrarEmpleadosC
?>