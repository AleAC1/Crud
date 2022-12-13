<?php 
	class Modelo{
		static public function	RutasModelo($rutas){

			if($rutas == "ingreso" || $rutas == "registrar"|| $rutas == "editar" || $rutas == "prestamos" || $rutas == "salir" || $rutas == "tablas" || $rutas == "alumnos" || $rutas == "maestros" || $rutas=="multas" || $rutas=="registrarAlumno" || $rutas=="editarAlumno" || $rutas=="editarmultas" || $rutas=="registrarmultas" || $rutas=="editarmaestros" || $rutas=="maestros" || $rutas=="registrarmaestros" || $rutas=="prestamoLibro" || $rutas=="editarPrestamoLibro" || $rutas=="registrarPrestamoLibro"){
				$pagina = "Vistas/modulos/".$rutas.".php";

			}else if ($rutas=="index") {

				$pagina = "Vistas/modulos/ingreso.php"; 

			}else {

				$pagina = "Vistas/modulos/ingreso.php"; 

			}
			return $pagina;
		}
	}


 ?>
