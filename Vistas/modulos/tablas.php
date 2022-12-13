<?php 
	session_start();
	if (!$_SESSION["Ingreso"]) {
		header("location:index.php?ruta=ingreso");
		exit();
	}

	if($_SESSION["tipoU"]=="admin"){
		echo'
		<h1>Seleccione una tabla a mostrar:</h1>
		<ul>
			  <li><a href="index.php?ruta=alumnos">Alumnos</a></li>
			  <li><a href="index.php?ruta=maestros">Maestros</a></li>
			  <li><a href="index.php?ruta=prestamos">Prestamos</a></li>
			  <li><a href="index.php?ruta=multas">Multas</a></li>

		  </ul>
		<h1>Procedimientos Almacenados</h1>
			<li><a href="index.php?ruta=prestamoLibro">LibrosPrestados</a></li>';		
	}else{
		echo '
			<h1>Seleccione una tabla a mostrar:</h1>
			<ul>
				<li><a href="index.php?ruta=prestamoLibro">LibrosPrestados</a></li>
				<li><a href="index.php?ruta=multas">Multas</a></li>
			</ul>'; 
	}
 ?>
