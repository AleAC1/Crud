<?php 
	class AlumnosC{ //es igual al EmpleadosC solo le cambie el nombre
        //REGISTRAR LOS PRESTAMOS
		public function RegistrarAlumnosC(){//es igaul a RegistrarEmpleadosC
			if(isset($_POST["NoControl"])){
				$datosC = array("NoControl"=>$_POST["NoControl"],"nombreAlum"=>$_POST["nombreAlum"], "apellidoPat"=>$_POST["apellidoPat"], "apellidoMat"=>$_POST["apellidoMat"],"calleCasa"=>$_POST["calleCasa"],"carrera"=>$_POST["carrera"],"semestre"=>$_POST["semestre"],"fechaNac"=>$_POST["fechaNac"],"sexo"=>$_POST["sexo"],"numCasa"=>$_POST["numCasa"]);
				$tablaBD = "alumno";//la tabla a la que se le agragaran los usuarios
				$respuesta = alumnosM::RegistrarAlumnosM($datosC, $tablaBD);
				if($respuesta == "Bien"){
					header("location:index.php?ruta=alumnos");
				}else{
					echo "ERROR";
				}

			}
        }
        public function BorrarAlumnosC(){
			if (isset($_GET["idB"])) {
				$datosC = $_GET["idB"];
				$tablaBD = "alumno";
                $respuesta = AlumnosM::BorrarAlumnosM($datosC, $tablaBD);
                
				if($respuesta == "Bien"){
                    header("location:index.php?ruta=alumnos");
				}else{
					echo "ERROR";
				}
			}
		}
		//MOSTRAR LOS PRESTAMOS
		public function MostrarAlumnosC(){
			$respuesta =  AlumnosM::MostrarAlumnosM();
			foreach($respuesta as $value){
				echo '<tr>
				<td>'.$value['no_control'].'</td>
				<td>'.$value['nombreAlum'].'</td>
				<td>'.$value['apellidoPatAlum'].'</td>
				<td>'.$value['apellidoMatAlum'].'</td>
                <td>'.$value['fechaNacAlum'].'</td>
                <td>'.$value['calleCasaAlum'].'</td>
                <td>'.$value['numCasaAlum'].'</td>
                <td>'.$value['sexoAlum'].'</td>
                <td>'.$value['carreraAlum'].'</td>
                <td>'.$value['semestreAlum'].'</td>
				<td><a href="index.php?ruta=editarAlumno&id='.$value['no_control'].'"><button>Editar</button></a></td>
				<td><a href="index.php?ruta=alumnos&idB='.$value['no_control'].'"><button>Borrar</button></a></td>
			</tr>';
			}
		}
		//EDITAR PRESTAMOS
		public function EditarAlumnosC(){
			$datosC = $_GET["id"];
			$tablaBD = "alumno";
			$respuesta = AlumnosM::EditarAlumnosM($datosC, $tablaBD); 
			echo '				
				<input type="hidden" placeholder="No. Control" value="'.$respuesta["no_control"].'" name="no_control">

				<input type="text" placeholder="Nombre Alumno" value="'.$respuesta["nombreAlum"].'" name="nombreAlum" required>

				<input type="text" placeholder="Apellido Paterno" value="'.$respuesta["apellidoPatAlum"].'" name="apellidoPatAlum" required>

				<input type="text" placeholder="Apellido Materno" value="'.$respuesta["apellidoMatAlum"].'" name="apellidoMatAlum" required>

				<input type="text" placeholder="Direccion Casa Alumno" value="'.$respuesta["calleCasaAlum"].'" name="CalleCasaAlum" required>

				<input type="number" placeholder="Número Casa" value="'.$respuesta["numCasaAlum"].'" name="NumCasaAlum" required>

				<input type="text" placeholder="Carrera" value="'.$respuesta["carreraAlum"].'" name="carreraAlum" required>

				<input type="text" placeholder="Semestre" value="'.$respuesta["semestreAlum"].'" name="semestreAlum" required>

				<p>
				<input type="date" placeholder="Fecha Nacimiento" value="'.$respuesta["fechaNacAlum"].'" name="fechaNacAlum" required>
				</p>

				<p>  
					Sexo: 
				<select name="sexoAlum">';
				if($respuesta["sexoAlum"]=="M"){
					echo '
					<option>M</option>
					<option>F</option>';
				}else{
					echo'
					<option>F</option>
					<option>M</option>
					';
				}	
				echo'
				</select>
				</p>
				<input type="submit" value="Actualizar">';
		}
		//ACTUALIZAR PRESTAMOS
		public function ActualizarAlumnosC(){

			if (isset($_POST["no_control"])) {
				$datosC =  array("no_control"=>$_POST["no_control"],"nombreAlum"=>$_POST["nombreAlum"],"apellidoPatAlum"=>$_POST["apellidoPatAlum"],"apellidoMatAlum"=>$_POST["apellidoMatAlum"],"CalleCasaAlum"=>$_POST["CalleCasaAlum"],"NumCasaAlum"=>$_POST["NumCasaAlum"],"carreraAlum"=>$_POST["carreraAlum"],"semestreAlum"=>$_POST["semestreAlum"],"fechaNacAlum"=>$_POST["fechaNacAlum"],"sexoAlum"=>$_POST["sexoAlum"]);

				$tablaBD = "alumno";
				$respuesta = AlumnosM::ActualizarAlumnosM($datosC, $tablaBD);
				if($respuesta == "Bien"){
					header("location:index.php?ruta=alumnos");
				}else{
					echo "ERROR";
				}
			}
		}		
	}
 ?>