<?php
	require_once "conexionBD.php";
	class MaestrosM extends ConexionBD {
		//REGISTRAR MAESTROS
		static public function RegistrarMaestrosM($datosC){
			$pdo = ConexionBD::cBD($_SESSION["usuario"],$_SESSION["clave"])->prepare('INSERT INTO maestros (rfc, "nombreMaestro", "apellidoPMaestro", "apellidoMMaestro", "fechaNacMaestro", "estadoCivilMaestro", "sexoMaestro", "areaMaestro", "curpMaestro", "nivelEstudioMaestro") VALUES (:rfc, :nombreM, :apellidoMP, :apellidoMM, :FechaNacM, :estadocivilMaestro, :sexoMaestro, :areaSensei, :curpMaestro, :nivelEstudioMaestro)');
			$pdo ->bindParam(":rfc", $datosC["rfc"],PDO::PARAM_STR);
			$pdo ->bindParam(":nombreM", $datosC["nombreM"],PDO::PARAM_STR);
			$pdo ->bindParam(":apellidoMP", $datosC["apellidoMP"],PDO::PARAM_STR);
			$pdo ->bindParam(":apellidoMM", $datosC["apellidoMM"],PDO::PARAM_STR);
			$pdo ->bindParam(":FechaNacM", $datosC["FechaNacM"],PDO::PARAM_STR);
			$pdo ->bindParam(":estadocivilMaestro", $datosC["estadocivilMaestro"],PDO::PARAM_STR);
			$pdo ->bindParam(":sexoMaestro", $datosC["sexoMaestro"],PDO::PARAM_STR);
			$pdo ->bindParam(":areaSensei", $datosC["areaSensei"],PDO::PARAM_STR);
			$pdo ->bindParam(":curpMaestro", $datosC["curpMaestro"],PDO::PARAM_STR);
			$pdo ->bindParam(":nivelEstudioMaestro", $datosC["nivelEstudioMaestro"],PDO::PARAM_STR);
			
			if($pdo -> execute()){
				return "Bien";
			}else{
				return "Error";
			}
			$pdo -> close();
		}
		//MOSTRAR MAESTROS
		static public function MostrarMaestrosM($tablaBD){
			$pdo = ConexionBD::cBD($_SESSION["usuario"],$_SESSION["clave"])->prepare("SELECT * FROM $tablaBD");
			$pdo -> execute();
			return $pdo -> fetchAll();
			$pdo -> close();
		}
		//EDITAR MAESTROS
		static public function EditarMaestrosM($datosC){
			$pdo = ConexionBD::cBD($_SESSION["usuario"],$_SESSION["clave"])->prepare("SELECT * FROM maestros WHERE rfc = :rfc");
			$pdo -> bindParam(":rfc", $datosC, PDO::PARAM_STR);
			$pdo -> execute();
			return $pdo -> fetch();
			$pdo -> close();
		}
		//ACTUALIZAR PRESTAMOS
		static public function ActualizarMaestrosM($datosC){

			$pdo = ConexionBD::cBD($_SESSION["usuario"],$_SESSION["clave"])->prepare('UPDATE maestros SET rfc = :rfc, "nombreMaestro" = :nombreM, "apellidoPMaestro" = :apellidoMP, "apellidoMMaestro" = :apellidoMM, "fechaNacMaestro" = :FechaNacM, "estadoCivilMaestro" = :estadocivilMaestro, "sexoMaestro" = :sexoMaestro, "areaMaestro" = :areaSensei, "curpMaestro" = :curpMaestro, "nivelEstudioMaestro" = :nivelEstudioMaestro  WHERE rfc = :rfc');
			
			$pdo ->bindParam(":rfc", $datosC["rfc"],PDO::PARAM_STR);
			$pdo ->bindParam(":nombreM", $datosC["nombreM"],PDO::PARAM_STR);
			$pdo ->bindParam(":apellidoMP", $datosC["apellidoMP"],PDO::PARAM_STR);
			$pdo ->bindParam(":apellidoMM", $datosC["apellidoMM"],PDO::PARAM_STR);
			$pdo ->bindParam(":FechaNacM", $datosC["FechaNacM"],PDO::PARAM_STR);
			$pdo ->bindParam(":estadocivilMaestro", $datosC["estadocivilMaestro"],PDO::PARAM_STR);
			$pdo ->bindParam(":sexoMaestro", $datosC["sexoMaestro"],PDO::PARAM_STR);
			$pdo ->bindParam(":areaSensei", $datosC["areaSensei"],PDO::PARAM_STR);
			$pdo ->bindParam(":curpMaestro", $datosC["curpMaestro"],PDO::PARAM_STR);
			$pdo ->bindParam(":nivelEstudioMaestro", $datosC["nivelEstudioMaestro"],PDO::PARAM_STR);
			
			if($pdo -> execute()){
				return "Bien";
			}else{
				return "Error";
			}
			$pdo -> close();

		}
		//BORAR MAESTROS
		static public function BorrarMaestrosM($datosC, $tablaBD){
			
			$pdo = ConexionBD::cBD($_SESSION["usuario"],$_SESSION["clave"])->prepare("DELETE FROM maestros WHERE rfc = :rfc" );
			$pdo -> bindParam(":rfc", $datosC, PDO::PARAM_STR);

			if($pdo -> execute()){
				return "Bien";
			}else{
				return "Error";
			}
			$pdo -> close();
		}
	}
?>