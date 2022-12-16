<?php
	require_once "conexionBD.php";
	class AlumnosM extends ConexionBD {
		//REGISTRAR PRESTAMOS
		static public function RegistrarAlumnosM($datosC, $tablaBD){
			$pdo = ConexionBD::cBD($_SESSION["usuario"],$_SESSION["clave"])->prepare("INSERT INTO $tablaBD (no_control, nombreAlum, apellidoPatAlum, apellidoMatAlum, fechaNacAlum, CalleCasaAlum, NumCasaAlum, sexoAlum, carreraAlum, semestreAlum) VALUES (:NoControl,:nombreAlum,:apellidoPat,:apellidoMat,:fechaNac,:calleCasa,:numCasa,:sexo,:carrera,:semestre)");//el prepare solicita la sentencia sql
			$pdo ->bindParam(":NoControl", $datosC["NoControl"],PDO::PARAM_INT);
			$pdo ->bindParam(":nombreAlum", $datosC["nombreAlum"],PDO::PARAM_STR);
			$pdo ->bindParam(":apellidoPat", $datosC["apellidoPat"],PDO::PARAM_STR);
            $pdo ->bindParam(":apellidoMat", $datosC["apellidoMat"],PDO::PARAM_STR);
            $pdo ->bindParam(":calleCasa", $datosC["calleCasa"],PDO::PARAM_STR);
            $pdo ->bindParam(":carrera", $datosC["carrera"],PDO::PARAM_STR);
            $pdo ->bindParam(":semestre", $datosC["semestre"],PDO::PARAM_STR);
            $pdo ->bindParam(":fechaNac", $datosC["fechaNac"],PDO::PARAM_STR);
            $pdo ->bindParam(":sexo", $datosC["sexo"],PDO::PARAM_STR);
            $pdo ->bindParam(":numCasa", $datosC["numCasa"],PDO::PARAM_INT);
			
			if($pdo -> execute()){
				return "Bien";
			}else{
				return "Error";
			}
			$pdo -> close();
		}
		//MOSTRAR PRESTAMOS
		static public function MostrarAlumnosM($tablaBD){
			$pdo = ConexionBD::cBD($_SESSION["usuario"],$_SESSION["clave"])->prepare("SELECT * FROM $tablaBD");
			$pdo -> execute();
			return $pdo -> fetchAll();
			$pdo -> close();
		}
		//EDITAR PRESTAMOS
		static public function EditarAlumnosM($datosC, $tablaBD){
			$pdo = ConexionBD::cBD($_SESSION["usuario"],$_SESSION["clave"])->prepare("SELECT no_control,nombreAlum,apellidoPatAlum,apellidoMatAlum,fechaNacAlum,CalleCasaAlum,NumCasaAlum,sexoAlum,carreraAlum,semestreAlum FROM $tablaBD WHERE no_control = :no_control");
			$pdo -> bindParam(":no_control", $datosC, PDO::PARAM_INT);
			$pdo -> execute();
			return $pdo -> fetch();
			$pdo -> close();
		}
		//ACTUALIZAR PRESTAMOS
		static public function ActualizarAlumnosM($datosC, $tablaBD){

			$pdo = ConexionBD::cBD($_SESSION["usuario"],$_SESSION["clave"])->prepare("UPDATE $tablaBD SET no_control = :no_control, nombreAlum = :nombreAlum, apellidoPatAlum = :apellidoPatAlum, apellidoMatAlum = :apellidoMatAlum, fechaNacAlum = :fechaNacAlum, CalleCasaAlum = :CalleCasaAlum, NumCasaAlum = :NumCasaAlum, sexoAlum = :sexoAlum, carreraAlum = :carreraAlum, semestreAlum = :semestreAlum WHERE no_control = :no_control");
			
			$pdo ->bindParam(":no_control", $datosC["no_control"], PDO::PARAM_INT);
			$pdo ->bindParam(":nombreAlum", $datosC["nombreAlum"], PDO::PARAM_STR);
			$pdo ->bindParam(":apellidoPatAlum", $datosC["apellidoPatAlum"], PDO::PARAM_STR);
			$pdo ->bindParam(":apellidoMatAlum", $datosC["apellidoMatAlum"], PDO::PARAM_STR);
			$pdo ->bindParam(":fechaNacAlum", $datosC["fechaNacAlum"], PDO::PARAM_STR);
			$pdo ->bindParam(":CalleCasaAlum", $datosC["CalleCasaAlum"], PDO::PARAM_STR);
			$pdo ->bindParam(":NumCasaAlum", $datosC["NumCasaAlum"], PDO::PARAM_INT);
			$pdo ->bindParam(":sexoAlum", $datosC["sexoAlum"], PDO::PARAM_STR);
			$pdo ->bindParam(":carreraAlum", $datosC["carreraAlum"], PDO::PARAM_STR);
			$pdo ->bindParam(":semestreAlum", $datosC["semestreAlum"], PDO::PARAM_INT);
			
			if($pdo -> execute()){
				return "Bien";
			}else{
				return "Error";
			}
			$pdo -> close();

		}
		//BORAR PRESTAMOS
		static public function BorrarAlumnosM($datosC, $tablaBD){
			
			$pdo = ConexionBD::cBD($_SESSION["usuario"],$_SESSION["clave"])->prepare("DELETE FROM $tablaBD WHERE no_control = :no_control" );
			$pdo -> bindParam(":no_control", $datosC, PDO::PARAM_INT);

			if($pdo -> execute()){
                return "Bien";
			}else{
				return "Error";
			}
            $pdo -> close();
		}
	}
?>