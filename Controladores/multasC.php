<?php
	class MultasC{
		//REGISTRAR MULTAS
		public function RegistrarMultasC(){
			if(isset($_POST["IdPrestamoR"])){
				$datosC = array("IdPrestamo"=>$_POST["IdPrestamoR"],"CantidadMulta"=>$_POST["CantidadMultaR"], "EstadoMulta"=>$_POST["EstadoMultaR"]);
				$tablaBD = "multas";//la tabla a la que se le agragaran las multas
				$respuesta = MultasM::RegistrarMultasM($datosC, $tablaBD);
				if($respuesta == "Bien"){
					header("location:index.php?ruta=multas");
				}else{
					echo "ERROR";
				}
			}
		}
		//MOSTRAR LOS PRESTAMOS
		public function MostrarMultasC(){
			$tablaBD = "multas";
			$respuesta =  MultasM::MostrarMultasM($tablaBD);
			foreach ($respuesta as $key => $value) {
				echo '<tr>
				<td>'.$value["id_prestamo"].'</td>
				<td>'.$value["cantidad_multa"].'</td>
				<td>'.$value["estado_multa"].'</td>
				<td><a href="index.php?ruta=editarmultas&id='.$value["id_prestamo"].'"><button>Editar</button></a></td>
				<td><a href="index.php?ruta=multas&idB='.$value["id_prestamo"].'"><button>Borrar</button></a></td>
			</tr>';
			}
		}
		//EDITAR PRESTAMOS
		public function EditarMultasC(){
			$datosC = $_GET["id"];
			$tablaBD = "multas";
			$respuesta = MultasM::EditarMultasM($datosC, $tablaBD); 
			//<input type="hidden" name="IdPrestamoE">
			echo '
				
				<input type="hidden" placeholder="IdPrestamo" value="'.$respuesta["id_prestamo"].'" name="IdMultaE">

				<input type="number" placeholder="CantidadMulta" value="'.$respuesta["cantidad_multa"].'" name="CantidadMultaE" required>

				<input type="number" placeholder="EstadoMulta" value="'.$respuesta["estado_multa"].'" name="EstadoMultaE" required>

				<input type="submit" value="Actualizar">';
		}
		//ACTUALIZAR PRESTAMOS
		public function ActualizarMultasC(){

			if (isset($_POST["IdMultaE"])) {
				$datosC =  array("id_prestamo"=>$_POST["IdMultaE"],"cantidad_multa"=>$_POST["CantidadMultaE"],
				"estado_multa"=>$_POST["EstadoMultaE"]);

				$tablaBD = "multas";
				$respuesta = MultasM::ActualizarMultasM($datosC, $tablaBD);
				if($respuesta == "Bien"){
					header("location:index.php?ruta=multas");
				}else{
					echo "ERROR";
				}
			}
		}
		//Eliminar PRESTAMOS
		public function BorrarMultasC(){
			if (isset($_GET["idB"])) {
				$datosC = $_GET["idB"];
				$tablaBD = "multas";
				$respuesta = MultasM::BorrarMultasM($datosC, $tablaBD);

				if($respuesta == "Bien"){
					header("location:index.php?ruta=multas");
				}else{
					echo "ERROR";
				}
			}
		}
	}
?>