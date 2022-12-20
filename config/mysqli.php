<?php
	class mysqli{
		private $server;
		private $username;
		private $pass;
		private $database;

		public static function connection(){
					
			$server="localhost";
			$username="root";
			$pass="admin";
			$database="app";


			$con=new mysqli($server,$username,$pass,$database);
			$con->query("SET NAMES 'utf8'");
			return $con;
		}
	}
	
?>