<?php 
require_once "Controladores/prestamosC.php";
require_once "Modelos/prestamosM.php";
require_once "Modelos/adminM.php";
require_once "Controladores/adminC.php";
require_once "Controladores/rutasC.php";
require_once "Modelos/rutasM.php";
require_once "Controladores/alumnosC.php";
require_once "Modelos/alumnosM.php";
require_once "Modelos/multasM.php";
require_once "Controladores/multasC.php";
require_once "Modelos/maestrosM.php";
require_once "Controladores/maestrosC.php";
require_once "Modelos/prestamoLibroM.php";
require_once "Controladores/prestamoLibroC.php";

$rutas = new RutasControlador();
$rutas -> Plantilla();

?>