<?php

class Conexion{
    private $host = 'localhost';
    private $user = 'root';
    private $password = '1234';
    private $database = "dbkermesse";
    //private $con;

    public function __construct(){
        $this->host     = 'localhost';
        $this->database = 'dbkermesse';
        $this->user     = 'root';
        $this->password = "1234";
    }

    public function connect(){

        try{

            $db = new mysqli($this->host, $this->user, $this->password, $this->database, 3306);

            return $db;

        }catch(PDOException $e){
            print_r('Error connection: ' . $e->getMessage());
        }
    }

    public function getCon(){
        return mysqli_connect($this->host, $this->user, $this->password, $this->database);
    }

    public function closeCon(){
        mysqli_close($this->con);
    }
}
