<?php
//Conexion a BD
class conexion
{
	public static function connect()
	{
		$pdo = new PDO("mysql:host=localhost;dbname=escuela;charset=utf8","root","");
		//errores
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//return conection
		return $pdo;
	}
}
?>