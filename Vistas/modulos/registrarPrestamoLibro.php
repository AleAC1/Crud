<?php 
	session_start();
	if (!$_SESSION["Ingreso"]) {
		header("location:index.php?ruta=ingreso");
		exit();
	}
 ?>
<br>
	<h1>REGISTRAR UN PRESTAMO DE LIBRO</h1>

	<form method="post">
		<input type="number" placeholder="IdPrestamo" name="IdPrestamoR" required>

		<h4>Fecha Prestamo</h4>
		<input type="date" placeholder="FechaPrestamo" name="FechaPrestamoR" required>
		<h4>Fecha Devolución</h4>
		<input type="date" placeholder="FechaDevolucion" name="FechaDevolucionR" required>

		<input type="number" placeholder="EstadoDevolucion" name="EstadoDevolucionR" required>

		<input type="text" placeholder="Observaciones" name="ObservacionesR" >
		
		<input type="text" placeholder="IdLibro" name="IdLibroR" required>		

		<input type="number" placeholder="NoControl" name="NoControlR" required>

		<input type="submit" value="Registrar Libro">

</form>
<?php
	$registrar = new PrestamoLibroC(); //EmpleadosC
	$registrar -> RegistrarPrestamoLibroC();//RegistrarEmpleadosC
?>