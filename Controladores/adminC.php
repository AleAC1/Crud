<?php 
	class AdminC{
		public function IngresoC(){
			if(isset($_POST["usuarioI"])){
					try{
						if($pdo = new PDO("mysql:host=localhost;dbname=biblioteca",$_POST["usuarioI"],$_POST["claveI"]))
						{
							session_start();
							$_SESSION["Ingreso"] = true;
							$_SESSION["usuario"]=$_POST["usuarioI"];
							$_SESSION["clave"]=$_POST["claveI"];
							if($_POST["usuarioI"]=="Administrador"){
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