<?php 
	class PrestamoLibroC{ 
		//REGISTRAR LOS PRESTAMOS CON PRECEDIMIENTOS ALMACENADOS
		public function RegistrarPrestamoLibroC(){

			if(isset($_POST["FechaPrestamoR"])){
				$datosC = array("IdPrestamo"=>$_POST["IdPrestamoR"], "FechaPrestamo"=>$_POST["FechaPrestamoR"], "FechaDevolucion"=>$_POST["FechaDevolucionR"], "EstadoDevolucion"=>$_POST["EstadoDevolucionR"], "Observaciones"=>$_POST["ObservacionesR"], "IdLibro"=>$_POST["IdLibroR"], "NoControl"=>$_POST["NoControlR"]);
				$respuesta = prestamoLibroM::RegistrarPrestamoLibroM($datosC);
				if($respuesta == "Bien"){
					header("location:index.php?ruta=prestamoLibro");
				}else{
					echo "ERROR";
				}
			}
		}

		//MOSTRAR LOS PRESTAMOS
		public function MostrarPrestamoLibroC(){
			$tablaBD = "prestamo";
			$respuesta =  PrestamoLibroM::MostrarPrestamoLibroM($tablaBD);
			foreach ($respuesta as $key => $value) {
				$libro = PrestamoLibroM::MostrarAuxiliarM("detalle_prestamo_x_libro",$value["id_prestamo"]);
				$control = PrestamoLibroM::MostrarAuxiliarM("prestamo_x_alumno",$value["id_prestamo"]);
				foreach($libro as $key =>$valorLibro){
					foreach($control as $key => $valorControl){
						echo '
						<tr>
						<td>'.$value["id_prestamo"].'</td>
						<td>'.$value["fechaPrestamo"].'</td>
						<td>'.$value["fechaDevolucion"].'</td>
						<td>'.$value["estadoDevuelto"].'</td>
						<td>'.$value["observaciones"].'</td>
						<td>'.$valorLibro["id_libro"].'</td>
						<td>'.$valorControl["no_control"].'</td>
						<td><a href="index.php?ruta=prestamoLibro&IDr='.$value["id_prestamo"].'"><button>Renovar</button></a></td>
						<td><a href="index.php?ruta=editarPrestamoLibro&id='.$value["id_prestamo"].'"><button>Editar</button></a></td>
						<td><a href="index.php?ruta=prestamoLibro&idB='.$value["id_prestamo"].'"><button>Borrar</button></a></td>
					</tr>';
					}
				}
			}
		}
		//EDITAR PRESTAMOS
		public function EditarPrestamoLibroC(){
			$datosC = $_GET["id"];
			$tablaBD = "prestamo";
			$libro = PrestamoLibroM::EditarPrestamoLibroM($datosC,"detalle_prestamo_x_libro");
			$control = PrestamoLibroM::EditarPrestamoLibroM($datosC,"prestamo_x_alumno");
			$respuesta = PrestamoLibroM::EditarPrestamoLibroM($datosC, $tablaBD); 
			
			//<input type="hidden" name="IdPrestamoE">
			echo '
				
				<input type="hidden" placeholder="IdPrestamo" value="'.$respuesta["id_prestamo"].'" name="IdPrestamoE">

				<input type="date" placeholder="FechaPrestamo" value="'.$respuesta["fechaPrestamo"].'" name="FechaPrestamoE" required>

				<input type="date" placeholder="FechaDevolucion" value="'.$respuesta["fechaDevolucion"].'" name="FechaDevolucionE" required>

				<input type="number" placeholder="EstadoDevolucion" value="'.$respuesta["estadoDevuelto"].'" name="EstadoDevolucionE" required>

				<input type="text" placeholder="Observaciones" value="'.$respuesta["observaciones"].'" name="ObservacionesE">

				<input type="number" placeholder="IdLibro" value="'.$libro["id_libro"].'" name="IdLibroE">
				
				<input type="number" placeholder="no_Control" value="'.$control["no_control"].'"name="NoControlE">

				<input type="submit" value="Actualizar">';
		}
		//ACTUALIZAR PRESTAMOS
		public function ActualizarPrestamoLibroC(){

			if (isset($_POST["IdPrestamoE"])) {
				$datosC =  array("id_prestamo"=>$_POST["IdPrestamoE"],"fecha_prestamo"=>$_POST["FechaPrestamoE"],
				"fecha_devolucion"=>$_POST["FechaDevolucionE"],"estado_de_volucion"=>$_POST["EstadoDevolucionE"],"observaciones"=>$_POST["ObservacionesE"],"id_libro"=>$_POST["IdLibroE"],"no_control"=>$_POST["NoControlE"]);

				$tablaBD = "prestamo";
				$respuesta = PrestamoLibroM::ActualizarPrestamoLibroM($datosC, $tablaBD);
				if($respuesta == "Bien"){
					header("location:index.php?ruta=prestamoLibro");
				}else{
					echo "ERROR";
				}
			}
		}
		//Eliminar PRESTAMOS
		public function BorrarPrestamoLibroC(){
			if (isset($_GET["idB"])) {
				$datosC = $_GET["idB"];
				$respuesta = PrestamoLibroM::BorrarPrestamoLibroM($datosC);

				if($respuesta == "Bien"){
					@header("location:index.php?ruta=prestamoLibro");
				}else{
					echo "ERROR";
				}
			}else{
				//RENOVAR CON PROCEDIMIENTO ALMACENADO
				if(isset($_GET["IDr"])){
					$datosC=$_GET["IDr"];
					$respuesta = PrestamoLibroM::RenovarPrestamoLibroM($datosC);
	
					if($respuesta == "Bien"){
						@header("location:index.php?ruta=prestamoLibro");
					}else{
						echo "ERROR";
					}
				}
			}
		}
	}
 ?>