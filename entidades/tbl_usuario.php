<?php

include_once '../datos/conexion.php';

class tbl_usuario extends Conexion {
    private $id_usuario;
    private $usuario;
    private $nombres;
    private $apellidos;
    private $email;
    private $pwd;
    private $estado;


    /*public function __construct($id_usuario, $usuario, $nombres, $apellidos, $email, $pwd, $estado)
    {
        $this->id_usuario = $id_usuario;
        $this->usuario = $usuario;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->email = $email;
        $this->pwd = $pwd;
        $this->estado = $estado;
    }*/


    public function __GET($k){ return $this->$k; }
    public function __SET($k, $v){ return $this->$k = $v; }

    public function userExists($user, $pwd){


        $q = "SELECT * FROM tbl_usuario WHERE usuario = '$user' AND pwd = '$pwd'";
        $con = $this->connect();
        $query = mysqli_query($con,$q);
        $row = mysqli_fetch_array($query);

        if($row != null){
            return true;
        }else{
            return false;
        }
    }

    public function insertarUsuario($nombres, $apellidos, $email, $usuario, $pwd){
        $q = "INSERT INTO tbl_usuario (usuario, nombres, apellidos, email, pwd, estado) VALUES ('$usuario', '$nombres', '$apellidos', '$email', '$pwd', 1)";
        $con = $this->connect();
        $query = mysqli_query($con,$q);
    }

    public function searchByEmail($email){
        $q = "SELECT * FROM tbl_usuario WHERE email = '$email'";
        $con = $this->connect();
        $query = mysqli_query($con,$q);
        $row = mysqli_fetch_array($query);

        if($row != null){
            return false;
        }else{
            return true;
        }
    }

    public function searchByUser($user){
        $q = "SELECT * FROM tbl_usuario WHERE usuario = '$user'";
        $con = $this->connect();
        $query = mysqli_query($con,$q);
        $row = mysqli_fetch_array($query);

        if($row != null){
            return false;
        }else{
            return true;
        }
    }

    public function setUsuario($usuario)
    {
        $query = $this->getCon()->prepare("SELECT * FROM tbl_usuario WHERE usuario = :user");
        $query->execute(['user' => $usuario]);

        foreach ($query as $currentUser) {
            $this->id_usuario = $currentUser['id_usuario'];
            $this->usuario = $currentUser['usuario'];
            $this->nombres = $currentUser['nombres'];
            $this->apellidos = $currentUser['apellidos'];
            $this->email = $currentUser['email'];
            $this->pwd = $currentUser['pwd'];
            $this->estado = $currentUser['estado'];
        }
    }
}
