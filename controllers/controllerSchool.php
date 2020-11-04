<?php
//Modelo
require ("models/school.php");
class control
{	//Atribute
	public $BD;
	public function __construct()
	{	
		//Instan object
		$this->BD = new school();
	}
	public function index()
	{
		include_once("views/home.php");
	}
	public function add()
	{
		include_once("views/insert.php");
	}
	public function add_data()
	{
		$data = new school();
		//update ID
		$data->id = $_POST['id'];
		$data->name = $_POST['name'];
		$data->email = $_POST['email'];
		$data->pass = $_POST['pass'];
		$data->photo = $_POST['photo'];
		$data->id > 0 ? $this->BD->update($data) : $this->BD->insert($data);
		header("Location:index.php");
	}
	public function delete()
	{
		$this->BD->delete($_REQUEST['id']);
		header("Location:index.php");
	}
	public function update()
	{
		//Update data from database
		if(isset($_REQUEST['id']))
		{
			$getData = $this->BD->getId($_REQUEST['id']);
		}
		include_once ("views/update.php");
	}
}
?>