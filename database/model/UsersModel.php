<?php
    class UsersModel{
        private $PDO;
        public function __construct()
        {
            require_once ('config/ConnectionDB.php');
            $con = new ConnectionDB();
            $this->PDO = $con->conexion();
        }
        
        public function show(){
            $stament = $this->PDO->prepare("SELECT * FROM users");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }
        
    }

?>