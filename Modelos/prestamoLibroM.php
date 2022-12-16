<?php
	require_once "conexionBD.php";
	class PrestamoLibroM extends ConexionBD {
		//REGISTRAR PRESTAMOS
		static public function RegistrarPrestamoLibroM($datosC){
			$pdo = ConexionBD::cBD($_SESSION["usuario"],$_SESSION["clave"])->prepare("CALL Prestamo_de_librosConAlumnos(:IdPrestamo, :FechaPrestamo, :FechaDevolucion, :EstadoDevolucion, :Observaciones, :IdLibro, :NoControl)");//el prepare solicita la sentencia sql
			$pdo ->bindParam(":IdPrestamo", $datosC["IdPrestamo"],PDO::PARAM_INT);
			$pdo ->bindParam(":FechaPrestamo", $datosC["FechaPrestamo"],PDO::PARAM_STR);
			$pdo ->bindParam(":FechaDevolucion", $datosC["FechaDevolucion"],PDO::PARAM_STR);
			$pdo ->bindParam(":EstadoDevolucion", $datosC["EstadoDevolucion"],PDO::PARAM_BOOL);
			$pdo ->bindParam(":Observaciones", $datosC["Observaciones"],PDO::PARAM_STR);
			$pdo ->bindParam(":IdLibro", $datosC["IdLibro"],PDO::PARAM_STR);
			$pdo ->bindParam(":NoControl", $datosC["NoControl"],PDO::PARAM_STR);
			
			if($pdo -> execute()){
				return "Bien";
			}else{
				return "Error";
			}
			$pdo -> close();
		}
		//MOSTRAR PRESTAMOS
		static public function MostrarPrestamoLibroM($tablaBD){
			$pdo = ConexionBD::cBD($_SESSION["usuario"],$_SESSION["clave"])->prepare("SELECT * FROM $tablaBD");
			$pdo -> execute();
			return $pdo -> fetchAll();
			$pdo -> close();
		}

		//MOSTRAR 
		static public function MostrarAuxiliarM($tablaBD,$id){
			$pdo = ConexionBD::cBD($_SESSION["usuario"],$_SESSION["clave"])->prepare("SELECT * FROM $tablaBD WHERE id_prestamo=$id");
			$pdo -> execute();
			return $pdo ->fetchAll();
			$pdo -> close();
		}

		//EDITAR PRESTAMOS
		static public function EditarPrestamoLibroM($datosC, $tablaBD){
			$pdo = ConexionBD::cBD($_SESSION["usuario"],$_SESSION["clave"])->prepare("SELECT * FROM $tablaBD WHERE id_prestamo = :id_prestamo");
			$pdo -> bindParam(":id_prestamo", $datosC, PDO::PARAM_INT);
			$pdo -> execute();
			return $pdo -> fetch();
			$pdo -> close();
		}
		//ACTUALIZAR PRESTAMOS
		static public function ActualizarPrestamoLibroM($datosC, $tablaBD){

			$pdo = ConexionBD::cBD($_SESSION["usuario"],$_SESSION["clave"])->prepare("UPDATE $tablaBD SET id_prestamo = :id_prestamo, fecha_prestamo = :fecha_prestamo, fecha_devolucion = :fecha_devolucion, estado_de_volucion = :estado_de_volucion, observaciones = :observaciones WHERE id_prestamo = :id_prestamo;
			UPDATE detalle_prestamo_x_libro SET id_libro = :id_libro WHERE id_prestamo = :id_prestamo;
			UPDATE prestamo_x_alumno SET no_control = :no_control WHERE id_prestamo = :id_prestamo;");

			
			$pdo ->bindParam(":id_prestamo", $datosC["id_prestamo"], PDO::PARAM_INT);
			$pdo ->bindParam(":fecha_prestamo", $datosC["fecha_prestamo"], PDO::PARAM_STR);
			$pdo ->bindParam(":fecha_devolucion", $datosC["fecha_devolucion"], PDO::PARAM_STR);
			$pdo ->bindParam(":estado_de_volucion", $datosC["estado_de_volucion"], PDO::PARAM_BOOL);
			$pdo ->bindParam(":observaciones", $datosC["observaciones"], PDO::PARAM_STR);
			$pdo ->bindParam(":id_libro",$datosC["id_libro"],PDO::PARAM_STR);
			$pdo ->bindParam(":no_control",$datosC["no_control"],PDO::PARAM_INT);
			
			if($pdo -> execute()){
				return "Bien";
			}else{
				return "Error";
			}
			$pdo -> close();

		}
		//BORAR PRESTAMOS
		static public function BorrarPrestamoLibroM($datosC){
			
			$pdo = ConexionBD::cBD($_SESSION["usuario"],$_SESSION["clave"])->prepare("DELETE FROM prestamo WHERE id_prestamo = :id_prestamo; DELETE FROM prestamo_x_alumno WHERE id_prestamo = :id_prestamo; DELETE FROM detalle_prestamo_x_libro WHERE id_prestamo = :id_prestamo" );
			$pdo -> bindParam(":id_prestamo", $datosC, PDO::PARAM_INT);

			if($pdo -> execute()){
				return "Bien";
			}else{
				return "Error";
			}
			$pdo -> close();
		}

		//RENOVAR
		static public function RenovarPrestamoLibroM($datosC){
			
			$pdo = ConexionBD::cBD($_SESSION["usuario"],$_SESSION["clave"])->prepare("CALL renovacionPrestamo( :idprestamo);");
			$pdo -> bindParam(":idprestamo", $datosC, PDO::PARAM_INT);

			if($pdo -> execute()){
				return "Bien";
			}else{
				return "Error";
			}
			$pdo -> close();
		}
	}
?>