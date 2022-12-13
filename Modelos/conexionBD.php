<?php 
		class ConexionBD{
			public function cBD($usuario,$clave){

				$rutaServidor="127.0.0.1";
				$puerto="5432";
				$nombreBaseDeDatos="bibliotecapostgre";
				try{
					$bd = new PDO("pgsql:host=$rutaServidor;port=$puerto;dbname=$nombreBaseDeDatos", $usuario, $clave); //host: localhost, nombreBD: biblioteca, User: Administrador y pass: admin
					$bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$bd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
					return $bd;
				}catch(PDOException $e){
					die("Error : ".$e->getMessage()."<br>");
				}
			}
		}
 ?>
