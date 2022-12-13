<?php
	require_once "conexionBD.php";
	class PrestamosM extends ConexionBD {
		//REGISTRAR PRESTAMOS
		static public function RegistrarPrestamosM($datosC, $tablaBD){
			$pdo = ConexionBD::cBD($_SESSION["usuario"],$_SESSION["clave"])->prepare('INSERT INTO prestamo (id_prestamo, "fechaPrestamo", "fechaDevolucion", "estadoDevuelto", "observaciones") VALUES (:id_prestamo,:FechaPrestamo,:FechaDevolucion,:EstadoDevolucion,:Observaciones)');//el prepare solicita la sentencia sql
			$pdo ->bindParam(":id_prestamo",$datosC["id_prestamo"],PDO::PARAM_INT);
			$pdo ->bindParam(":FechaPrestamo", $datosC["FechaPrestamo"],PDO::PARAM_STR);
			$pdo ->bindParam(":FechaDevolucion", $datosC["FechaDevolucion"],PDO::PARAM_STR);
			$pdo ->bindParam(":EstadoDevolucion", $datosC["EstadoDevolucion"],PDO::PARAM_BOOL);
			$pdo ->bindParam(":Observaciones", $datosC["Observaciones"],PDO::PARAM_STR);
			
			if($pdo -> execute()){
				return "Bien";
			}else{
				return "Error";
			}
			$pdo -> close();
		}
		//MOSTRAR PRESTAMOS
		static public function MostrarPrestamosM($tablaBD){
			$pdo = ConexionBD::cBD($_SESSION["usuario"],$_SESSION["clave"])->prepare('SELECT id_prestamo, "fechaPrestamo", "fechaDevolucion", "estadoDevuelto", observaciones FROM prestamo');
			$pdo -> execute();
			return $pdo -> fetchAll();
			$pdo -> close();
		}
		//EDITAR PRESTAMOS
		static public function EditarPrestamosM($datosC, $tablaBD){
			$pdo = ConexionBD::cBD($_SESSION["usuario"],$_SESSION["clave"])->prepare('SELECT id_prestamo, "fechaPrestamo", "fechaDevolucion", "estadoDevuelto", observaciones FROM prestamo WHERE id_prestamo = :id_prestamo');
			$pdo -> bindParam(":id_prestamo", $datosC, PDO::PARAM_INT);
			$pdo -> execute();
			return $pdo -> fetch();
			$pdo -> close();
		}
		//ACTUALIZAR PRESTAMOS
		static public function ActualizarPrestamosM($datosC, $tablaBD){

			$pdo = ConexionBD::cBD($_SESSION["usuario"],$_SESSION["clave"])->prepare('UPDATE prestamo SET id_prestamo = :id_prestamo, "fechaPrestamo" = :fecha_prestamo, "fechaDevolucion" = :fecha_devolucion, "estadoDevuelto" = :estado_de_volucion, observaciones = :observaciones WHERE id_prestamo = :id_prestamo');

			
			$pdo ->bindParam(":id_prestamo", $datosC["id_prestamo"], PDO::PARAM_INT);
			$pdo ->bindParam(":fecha_prestamo", $datosC["fecha_prestamo"], PDO::PARAM_STR);
			$pdo ->bindParam(":fecha_devolucion", $datosC["fecha_devolucion"], PDO::PARAM_STR);
			$pdo ->bindParam(":estado_de_volucion", $datosC["estado_de_volucion"], PDO::PARAM_BOOL);
			$pdo ->bindParam(":observaciones", $datosC["observaciones"], PDO::PARAM_STR);
			
			if($pdo -> execute()){
				return "Bien";
			}else{
				return "Error";
			}
			$pdo -> close();

		}
		//BORAR PRESTAMOS
		static public function BorrarPrestamosM($datosC, $tablaBD){
			
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