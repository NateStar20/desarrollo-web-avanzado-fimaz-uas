<?php
class Database{
    private $host = "localhost";
    private $dbname = "tienda";
    private $username = "root";
    private $password = "";
    private $conection;

    public function __construct(){
        try {
            $dsn ="mysql:host={$this->host};dbname={$this->dbname};charset=utf8mb4";
            $this->conection = new PDO($dsn,$this->username, $this->password);
            
            $this->conection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $this->conection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            
        }catch(PDOException $e){
            die("Error de conexion: " . $e->getMessage());
        }

    }

    public function getConnection() 
    {
        return $this->conection; 
    }
}
