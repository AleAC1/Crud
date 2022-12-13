<?php
	require_once "conexionBD.php";
	class MultasM extends ConexionBD {
		//Registrar Multas
		static public function RegistrarMultasM($datosC, $tablaBD){
			$pdo = ConexionBD::cBD($_SESSION["usuario"],$_SESSION["clave"])->prepare("INSERT INTO $tablaBD (id_prestamo, cantidad_multa, estado_multa) VALUES (:IdPrestamo,:CantidadMulta,:EstadoMulta)");//el prepare solicita la sentencia sql
			$pdo ->bindParam(":IdPrestamo", $datosC["IdPrestamo"],PDO::PARAM_INT);
			$pdo ->bindParam(":CantidadMulta", $datosC["CantidadMulta"],PDO::PARAM_INT);
			$pdo ->bindParam(":EstadoMulta", $datosC["EstadoMulta"],PDO::PARAM_BOOL);

			if($pdo -> execute()){
				return "Bien";
			}else{
				return "Error";
			}
			$pdo -> close();
			
		}
		//MOSTRAR PRESTAMOS
		static public function MostrarMultasM($tablaBD){
			@$pdo = ConexionBD::cBD($_SESSION["usuario"],$_SESSION["clave"])->prepare("SELECT * FROM $tablaBD");
			$pdo -> execute();
			return $pdo -> fetchAll();
			$pdo -> close();
		}
		//EDITAR PRESTAMOS
		static public function EditarMultasM($datosC, $tablaBD){
			$pdo = ConexionBD::cBD($_SESSION["usuario"],$_SESSION["clave"])->prepare("SELECT id_prestamo, cantidad_multa, estado_multa FROM $tablaBD WHERE id_prestamo = :id_prestamo");
			$pdo -> bindParam(":id_prestamo", $datosC, PDO::PARAM_INT);
			$pdo -> execute();
			return $pdo -> fetch();
			$pdo -> close();
		}
		//ACTUALIZAR PRESTAMOS
		static public function ActualizarMultasM($datosC, $tablaBD){

			$pdo = ConexionBD::cBD($_SESSION["usuario"],$_SESSION["clave"])->prepare("UPDATE $tablaBD SET id_prestamo = :id_prestamo, cantidad_multa = :cantidad_multa, estado_multa = :estado_multa WHERE id_prestamo = :id_prestamo");

			
			$pdo ->bindParam(":id_prestamo", $datosC["id_prestamo"], PDO::PARAM_INT);
			$pdo ->bindParam(":cantidad_multa", $datosC["cantidad_multa"], PDO::PARAM_INT);
			$pdo ->bindParam(":estado_multa", $datosC["estado_multa"], PDO::PARAM_BOOL);
			
			if($pdo -> execute()){
				return "Bien";
			}else{
				return "Error";
			}
			$pdo -> close();

		}
		//BORAR PRESTAMOS
		static public function BorrarMultasM($datosC, $tablaBD){
			
			$pdo = ConexionBD::cBD($_SESSION["usuario"],$_SESSION["clave"])->prepare("DELETE FROM $tablaBD WHERE id_prestamo = :id_prestamo" );
			$pdo -> bindParam(":id_prestamo", $datosC, PDO::PARAM_INT);

			if($pdo -> execute()){
				return "Bien";
			}else{
				return "Error";
			}
			$pdo -> close();
		}
	}
  ?>