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

	public function show_by_username($username)
	{
		$query = "select * from users where username = '".$username."';";
		$result = $this->database->query($query);
		if ($result == true) 
		{
			return $result;
		} 
		else 
		{
			return false;
		}
	}

	public function insert_users($username,$rut,$name,$lastname_p,$lastname_m,$phone,$mail,$role)
	{
		$query = "INSERT INTO users (username, rut, name, lastname_p, lastname_m, phone, mail, role, state, password)
					VALUES ('".$username."', '".$rut."', '".$name."', '".$lastname_p."', 
					'".$lastname_m."', '".$phone."', '".$mail."', '".$role."', '1', '123456'); ";
		$result = $this->database->query($query);
		if ($result == true) 
		{
			return $result;
		} 
		else 
		{
			return false;
		}
	}

	public function update_users($username,$rut,$name,$lastname_p,$lastname_m,$phone,$mail,$role,$username2)
	{
		$query = "UPDATE users SET username = '".$username."', name = '".$name."', lastname_p = '".$lastname_p."', 
					lastname_m = '".$lastname_m."', phone = '".$phone."', mail = '".$mail."', role = '".$role."'
					WHERE username = '".$username2."';";
		$result=$this->database->query($query);
		if($result==true)
		{
			return $result;
		}
		else
		{
			return false;
		}	
	}

	public function update_user_status($username,$state)
	{
		$query = "UPDATE users SET state = '".$state."' WHERE username = '".$username."';";
		$result=$this->database->query($query);
		if($result==true)
		{
			return $result;
		}
		else
		{
			return false;
		}	
	}

	public function delete_users($username)
	{
		$query="DELETE FROM users WHERE username ='".$username."';";
		$result=$this->database->query($query);
		if($result==true)
		{
			return $result;
		}
		else
		{
			return false;
		}	
	}
}

?>