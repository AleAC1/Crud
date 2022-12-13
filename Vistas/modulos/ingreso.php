<br>
	<h1>INGRESAR</h1>

	<form method="post">
		
		<input type="text" placeholder="Usuario" name="usuarioI" required>

		<input type="password" placeholder="Contraseña" name="claveI" required>

		<input type="submit" value="Ingresar">

</form>

<br><br><br>
usuario: administrador <br>
contraseña: admin
<br><br><br>
usuario: bibliotecario <br>
contraseña: 1234
<?php
	$ingreso = new AdminC();
	$ingreso -> IngresoC();

?>