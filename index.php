<?php
//Incluimos el controlador
require ("./controllers/controllerSchool.php");
//Conexion
require ("./config/connection.php");
//Instanciamos de la clase control()
$controller = new control();

if(!isset($_REQUEST['option']))
{
	$controller->index();
}
else
{
	$action = $_REQUEST['option'];
	//Funcion que retorna la vista
	call_user_func(array($controller,$action));
}
?>