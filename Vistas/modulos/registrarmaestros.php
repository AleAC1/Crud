<?php 
	session_start();
	if (!$_SESSION["Ingreso"]) {
		header("location:index.php?ruta=ingreso");
		exit();
	}
 ?>
<br>
	<h1>REGISTRAR UN MAESTRO</h1>

	<form method="post">

		<input type="text" placeholder="RFC" name="RFCR" required>

		<input type="text" placeholder="NombreM" name="NombreMR" required>

		<input type="text" placeholder="ApellidoMP" name="ApellidoMPR" required>

		<input type="text" placeholder="ApellidoMM" name="ApellidoMMR" required>

		<input type="date" placeholder="FechaNacM" name="FechaNacMR" required>

		 <p>  
            EstadoCivil: 
        <select name="EstadoCivil">
            <option>Soltero(a)</option>

            <option>Casado(a)</option>

            <option>Divorciado(a)</option>

            <option>Viudo(a)</option>
        </select>
        </p>
	
		 <p>  
            Sexo: 
        <select name="Sexo">
            <option>M</option>
            <option>F</option>
        </select>
        </p>

		<input type="text" placeholder="Area Maestro" name="AreaSenseiR" required>

		<input type="text" placeholder="CurpMaestro" name="CurpMaestroR" required>

		<input type="text" placeholder="NivelDeEstudioMaestro" name="NivelDeEstudioMaestroR" required>

		<input type="submit" value="Registrar">

</form>
<?php
	$registrar = new MaestrosC(); 
	$registrar -> RegistrarMaestrosC();
?>