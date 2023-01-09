<?php
    class PDO{
        
        private $conexion;
        private $configuracion = [
            "driver" => "mysql",
            "host" => "localhost",
            "database" => "app",
            "port" => "3306",
            "username" => "root",
            "password" => "admin",
            "charset" => "utf8mb4"
        ];

        public function __construct(){

        }

        public function connection(){
            try{
                $CONTROLADOR = $this->configuracion["driver"];
                $SERVIDOR = $this->configuracion["host"];
                $BASE_DATOS = $this->configuracion["database"];
                $PUERTO = $this->configuracion["port"];
                $USUARIO = $this->configuracion["username"];
                $CLAVE = $this->configuracion["password"];
                $CODIFICACION = $this->configuracion["charset"];

                $url = "{$CONTROLADOR}:host={$SERVIDOR}:{$PUERTO};"
                        . "dbname={$BASE_DATOS};charset={$CODIFICACION}";
                //Se crea la conexión.
                $this->conexion = new PDO($url, $USUARIO, $CLAVE);
                return $this->conexion;
            }catch(PDOException $e){
                echo "NO CONECTADO";
                echo $e->getTraceAsString();
            }
        }
        
    }

?>