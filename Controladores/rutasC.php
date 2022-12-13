<?php 

	class RutasControlador{
			
			public function Plantilla(){
				include "Vistas/plantilla.php";

			}
			/*public*/ 
	  public  function rutas(){

	 	if(isset($_GET["ruta"])){

	 		$rutas = $_GET["ruta"];

	 	}else{

	 		$rutas = "index";

	 	}

	 		$respuesta = Modelo::RutasModelo($rutas);
	 		include $respuesta;
	 }
	}
	  

 ?>