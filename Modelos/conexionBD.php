<?php 
		class ConexionBD{
			public static function cBD($usuario,$clave){
				$bd = new PDO("mysql:host=localhost;dbname=biblioteca",$usuario,$clave); //host: localhost, nombreBD: biblioteca, User: Administrador y pass: admin
				return $bd;
			}
		}
 ?>