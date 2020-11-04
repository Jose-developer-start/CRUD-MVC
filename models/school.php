<?php
class school
{
	public $CONNECT;
	//var add data
	public $id;
	public $name;
	public $email;
	public $pass;
	public $photo;
	//Contruct
	public function __construct()
	{
		try{
			$this->CONNECT = conexion::connect();
		}catch(Exception $error){
			die($error->getMessage());
		}
	}
	public function getData()
	{
		$selectSQL = "SELECT * FROM usuarios";
		try{
			$stmt = $this->CONNECT->prepare($selectSQL);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_OBJ);
		}catch(Exception $error)
		{
			die($error->getMessage());
		}
	}

	public function insert($data)
	{
		try{
			$insertSQL = "INSERT INTO usuarios (Nombre,Correo,Clave,Foto) 
			VALUES(?,?,?,?)";
			$stmt = $this->CONNECT->prepare($insertSQL);
			$stmt->execute(array($data->name,$data->email,$data->pass,$data->photo));
			
		}catch(Exception $error)
		{
			die($error->getMessage());
		}
	}

	public function delete($id){
		try{
			$deleteSQL = "DELETE FROM usuarios WHERE ID=?";
			$stmt = $this->CONNECT->prepare($deleteSQL);
			$stmt->bindParam(1,$id,PDO::PARAM_INT);
			$stmt->execute();

		}catch(Exception $error)
		{
			die($error->getMessage());
		}
	}
	public function getId($id)
	{
		$selectSQL = "SELECT * FROM usuarios WHERE ID=?";
		try{
			$stmt = $this->CONNECT->prepare($selectSQL);
			$stmt->execute(array($id));
			return $stmt->fetch(PDO::FETCH_OBJ);
		}catch(Exception $error)
		{
			die($error->getMessage());
		}
	}
	public function update($data)
	{
		try{
			$updateSQL = "UPDATE usuarios SET Nombre=?,Correo=?,Clave=?,Foto=? WHERE ID=?";
			$stmt = $this->CONNECT->prepare($updateSQL);
			$stmt->execute(array($data->name,$data->email,$data->pass,$data->photo,$data->id));
		}catch(Exception $error){
			die($error->getMessage());
		}
	}
}



?>