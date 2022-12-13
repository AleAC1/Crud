<?php 
	class PrestamosC{ //es igual al EmpleadosC solo le cambie el nombre
		//REGISTRAR LOS PRESTAMOS
		public function RegistrarPrestamosC(){//es igaul a RegistrarEmpleadosC
			if(isset($_POST["FechaPrestamoR"])){
				$datosC = array("id_prestamo"=>$_POST["id_prestamoR"],"FechaPrestamo"=>$_POST["FechaPrestamoR"],"FechaDevolucion"=>$_POST["FechaDevolucionR"], "EstadoDevolucion"=>$_POST["EstadoDevolucionR"], "Observaciones"=>$_POST["ObservacionesR"]);
				$tablaBD = "prestamo";//la tabla a la que se le agragaran los usuarios
				$respuesta = prestamosM::RegistrarPrestamosM($datosC, $tablaBD);
				if($respuesta == "Bien"){
					header("location:index.php?ruta=prestamos");
				}else{
					echo "ERROR";
				}
			}
		}
		//MOSTRAR LOS PRESTAMOS
		public function MostrarPrestamosC(){
			$tablaBD = "prestamo";
			$respuesta =  PrestamosM::MostrarPrestamosM($tablaBD);
			foreach ($respuesta as $key => $value) {
				echo '<tr>
				<td>'.$value["id_prestamo"].'</td>
				<td>'.$value["fechaPrestamo"].'</td>
				<td>'.$value["fechaDevolucion"].'</td>
				<td>'.$value["estadoDevuelto"].'</td>
				<td>'.$value["observaciones"].'</td>
				<td><a href="index.php?ruta=editar&id='.$value["id_prestamo"].'"><button>Editar</button></a></td>
				<td><a href="index.php?ruta=prestamos&idB='.$value["id_prestamo"].'"><button>Borrar</button></a></td>
			</tr>';
			}
		}
		//EDITAR PRESTAMOS
		public function EditarPrestamosC(){
			$datosC = $_GET["id"];
			$tablaBD = "prestamo";
			$respuesta = PrestamosM::EditarPrestamosM($datosC, $tablaBD); 
			//<input type="hidden" name="IdPrestamoE">
			echo '
				
				<input type="hidden" placeholder="IdPrestamo" value="'.$respuesta["id_prestamo"].'" name="IdPrestamoE">

				<input type="date" placeholder="FechaPrestamo" value="'.$respuesta["fechaPrestamo"].'" name="FechaPrestamoE" required>

				<input type="date" placeholder="FechaDevolucion" value="'.$respuesta["fechaDevolucion"].'" name="FechaDevolucionE" required>

				<input type="number" placeholder="EstadoDevolucion" value="'.$respuesta["estadoDevuelto"].'" name="EstadoDevolucionE" required>

				<input type="text" placeholder="Observaciones" value="'.$respuesta["observaciones"].'" name="ObservacionesE">

				<input type="submit" value="Actualizar">';
		}
		//ACTUALIZAR PRESTAMOS
		public function ActualizarPrestamosC(){

			if (isset($_POST["IdPrestamoE"])) {
				$datosC =  array("id_prestamo"=>$_POST["IdPrestamoE"],"fecha_prestamo"=>$_POST["FechaPrestamoE"],
				"fecha_devolucion"=>$_POST["FechaDevolucionE"],"estado_de_volucion"=>$_POST["EstadoDevolucionE"],"observaciones"=>$_POST["ObservacionesE"]);

				$tablaBD = "prestamo";
				$respuesta = PrestamosM::ActualizarPrestamosM($datosC, $tablaBD);
				if($respuesta == "Bien"){
					header("location:index.php?ruta=prestamos");
				}else{
					echo "ERROR";
				}
			}
		}
		//Eliminar PRESTAMOS
		public function BorrarPrestamosC(){
			if (isset($_GET["idB"])) {
				$datosC = $_GET["idB"];
				$tablaBD = "prestamo";
				$respuesta = PrestamosM::BorrarPrestamosM($datosC, $tablaBD);

				if($respuesta == "Bien"){
					header("location:index.php?ruta=prestamos");
				}else{
					echo "ERROR";
				}
			}
		}
	}
 ?>