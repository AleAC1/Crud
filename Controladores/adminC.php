<?php 
	class AdminC{
		public function IngresoC(){
			if(isset($_POST["usuarioI"])){
				$rutaServidor="127.0.0.1";
				$puerto="5432";
				$nombreBaseDeDatos="bibliotecapostgre";
				$usuario=$_POST["usuarioI"];
				$contraseña=$_POST["claveI"];
					try{
						if($pdo = new PDO("pgsql:host=$rutaServidor;port=$puerto;dbname=$nombreBaseDeDatos", $usuario, $contraseña))
						{
							session_start();
							$_SESSION["Ingreso"] = true;
							$_SESSION["usuario"]=$_POST["usuarioI"];
							$_SESSION["clave"]=$_POST["claveI"];
							if($_POST["usuarioI"]=="administrador"){
								$_SESSION["tipoU"]="admin";
							}else{
								$_SESSION["tipoU"]="normal";
							}
							header("location:index.php?ruta=tablas");	
						}					
					}catch(Exception $e){
						echo "Cuenta Errónea";
					}
			}
		}
	}
 ?>