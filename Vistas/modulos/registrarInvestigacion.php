<?php 
	session_start();
	if (!$_SESSION["Ingreso"]) {
		header("location:index.php?ruta=ingreso");
		exit();
	}
 ?>
<br>
	<h1>REGISTRAR UN ALUMNO</h1>

	<form method="post">

		<input type="number" placeholder="No Control" name="NoControl" required>

		<input type="text" placeholder="Nombre Alumno" name="nombreAlum" required>

		<input type="text" placeholder="Apellido Paterno" name="apellidoPat" required>

		<input type="text" placeholder="Apellito Materno" name="apellidoMat" required>        

        <input type="text" placeholder="Direccion(Calle)" name="calleCasa" required>

        <input type="number" placeholder="Numero Casa" name="numCasa" required>

        <input type="text" placeholder="Carrera" name="carrera" required>

        <input type="number" placeholder="Semestre" name="semestre" required>
        <p>
        Fecha Nacimiento:
        <input type="date" placeholder="Fecha Nacimiento" name="fechaNac" required>
        </p>
        <p>  
            Sexo: 
        <select name="sexo">
            <option>M</option>
            <option>F</option>
        </select>
        </p>
		<input type="submit" value="Registrar">
</form>
<?php
	$registrar = new AlumnosC(); //EmpleadosC
	$registrar -> RegistrarAlumnosC();//RegistrarEmpleadosC
?>