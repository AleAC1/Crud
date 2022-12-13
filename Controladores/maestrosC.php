<?php 
	class MaestrosC{ 
		//REGISTRAR LOS MAESTROS
		public function RegistrarMaestrosC(){//es igaul a RegistrarEmpleadosC
			if(isset($_POST["RFCR"])){
				$datosC = array("rfc"=>$_POST["RFCR"],"nombreM"=>$_POST["NombreMR"], "apellidoMP"=>$_POST["ApellidoMPR"], "apellidoMM"=>$_POST["ApellidoMMR"], "FechaNacM"=>$_POST["FechaNacMR"],"estadocivilMaestro"=>$_POST["EstadoCivil"],"sexoMaestro"=>$_POST["Sexo"],"areaSensei"=>$_POST["AreaSenseiR"],"curpMaestro"=>$_POST["CurpMaestroR"],"nivelEstudioMaestro"=>$_POST["NivelDeEstudioMaestroR"]);				
				$respuesta = MaestrosM::RegistrarMaestrosM($datosC);
				if($respuesta == "Bien"){
					header("location:index.php?ruta=maestros");
				}else{
					echo "ERROR";
				}

			}
		}
		//MOSTRAR LOS MAESTROS
		public function MostrarMaestrosC(){
			$tablaBD = "maestros";
			$respuesta =  MaestrosM::MostrarMaestrosM($tablaBD);
			foreach ($respuesta as $key => $value) {
				echo '<tr>
				<td>'.$value["rfc"].'</td>
				<td>'.$value["nombreMaestro"].'</td>
				<td>'.$value["apellidoPMaestro"].'</td>
				<td>'.$value["apellidoMMaestro"].'</td>
				<td>'.$value["fechaNacMaestro"].'</td>
				<td>'.$value["estadoCivilMaestro"].'</td>
				<td>'.$value["sexoMaestro"].'</td>
				<td>'.$value["areaMaestro"].'</td>
				<td>'.$value["curpMaestro"].'</td>
				<td>'.$value["nivelEstudioMaestro"].'</td>
				<td><a href="index.php?ruta=editarmaestros&id='.$value["rfc"].'"><button>Editar</button></a></td>
				<td><a href="index.php?ruta=maestros&idB='.$value["rfc"].'"><button>Borrar</button></a></td>
			</tr>';
			}
		}
		//EDITAR PRESTAMOS
		public function EditarMaestrosC(){
			$datosC = $_GET["id"];
			$tablaBD = "maestros";
			$respuesta = MaestrosM::EditarMaestrosM($datosC, $tablaBD); 
			//<input type="hidden" name="IdPrestamoE">
			echo '
				
				<input type="hidden" placeholder="RFC" value="'.$respuesta["rfc"].'" name="rfcE">

				<input type="text" placeholder="nombreM" value="'.$respuesta["nombreMaestro"].'" name="nombreME" required>

				<input type="text" placeholder="apellidoMP" value="'.$respuesta["apellidoPMaestro"].'" name="apellidoMPE" required>

				<input type="text" placeholder="apellidoMM" value="'.$respuesta["apellidoMMaestro"].'" name="apellidoMME" required>

				<input type="date" placeholder="FechaNacM" value="'.$respuesta["fechaNacMaestro"].'" name="FechaNacME" required>

						 <p>  
            EstadoCivil: 
        <select name="EstadoCivil">
            <option ';if($respuesta["estadoCivilMaestro"]=="Soltero(a)"){echo 'selected';}echo'>Soltero(a)</option>
            <option ';if($respuesta["estadoCivilMaestro"]=="Viudo(a)"){echo 'selected';}echo'>Viudo(a)</option>
            <option ';if($respuesta["estadoCivilMaestro"]=="Casado(a)"){echo 'selected';}echo'>Casado(a)</option>
            <option ';if($respuesta["estadoCivilMaestro"]=="Divorciado(a)"){echo 'selected';}echo'>Divorciado(a)</option>
        </select>
        </p>

				 <p>  
            Sexo: 
        <select name="Sexo">
            <option ';if($respuesta["sexoMaestro"]=="M"){echo 'selected';}echo'>M</option>
            <option ';if($respuesta["sexoMaestro"]=="F"){echo 'selected';}echo'>F</option>
        </select>
        </p>

				<input type="text" placeholder="AreaMaestro" value="'.$respuesta["areaMaestro"].'" name="areaSenseiE" required>

				<input type="text" placeholder="curpMaestro" value="'.$respuesta["curpMaestro"].'" name="curpMaestroE" required>

				<input type="text" placeholder="nivelEstudioMaestro" value="'.$respuesta["nivelEstudioMaestro"].'" name="nivelEstudioMaestroE" required>

				<input type="submit" value="Actualizar">';
		}
		//ACTUALIZAR MAESTROS
		public function ActualizarMaestrosC(){

			if (isset($_POST["rfcE"])) {
				$datosC =  array("rfc"=>$_POST["rfcE"],"nombreM"=>$_POST["nombreME"],
				"apellidoMP"=>$_POST["apellidoMPE"],"apellidoMM"=>$_POST["apellidoMME"],"FechaNacM"=>$_POST["FechaNacME"],
				"estadocivilMaestro"=>$_POST["EstadoCivil"],"sexoMaestro"=>$_POST["Sexo"],
				"areaSensei"=>$_POST["areaSenseiE"],"curpMaestro"=>$_POST["curpMaestroE"],"nivelEstudioMaestro"=>$_POST["nivelEstudioMaestroE"]);

				$tablaBD = "maestros";
				$respuesta = MaestrosM::ActualizarMaestrosM($datosC, $tablaBD);
				if($respuesta == "Bien"){
					header("location:index.php?ruta=maestros");
				}else{
					echo "ERROR";
				}
			}
		}
		//Eliminar MAESTROS
		public function BorrarMaestrosC(){
			if (isset($_GET["idB"])) {
				$datosC = $_GET["idB"];
				$tablaBD = "maestros";
				$respuesta = MaestrosM::BorrarMaestrosM($datosC, $tablaBD);

				if($respuesta == "Bien"){
					header("location:index.php?ruta=maestros");
				}else{
					echo "ERROR";
				}
			}
		}
	}
 ?>