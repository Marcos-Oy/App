<?php

//CRUD o consultas
class UsersDAO{
    public function __construct()
	{
		require_once ("config/mysqli.php");
		$this->database = db::connection();
	}

	//metodo que devuelve todo la tabla usuario
	public function list_users()
	{
		$query = "select * from users";
		$result = $this->database->query($query);
		while ($row = $result->fetch_assoc()) 
		{
			$this->request[] = $row;
		}
		if ($result == true) 
		{
			return $this->request;
		} 
		else 
		{
			return false;
		}
	}

	public function insert_users()
	{
		$query = " ";
		$result = $this->database->query($query);
		if ($result == true) 
		{
			return true;
		} 
		else 
		{
			return false;
		}
	}

	public function edit_users()
	{
		$query=" ";
		$result=$this->database->query($query);
		if($result==true)
		{
		return true;
		}
		else
		{
			return false;
		}	
	}

	public function delete_users()
	{
		$query=" ";
		$result=$this->database->query($query);
		if($result==true)
		{
		return true;
		}
		else
		{
			return false;
		}	
	}
}

?>