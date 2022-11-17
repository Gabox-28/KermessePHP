<?php

include_once '../datos/conexion.php';

class tbl_comunidad extends Conexion{
    private $id_comunidad;
    private $nombre;
    private $responsable;
    private $desc_contribucion;
    private $estado;

    public function __GET($k){ return $this->$k; }
    public function __SET($k, $v){ return $this->$k = $v; }

    public function leerComunidades(){
        $sql = "SELECT * FROM tbl_comunidad";
        $con = $this->connect();
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function verComunidad($id_comunidad){
        $sql = "SELECT * FROM tbl_comunidad WHERE id_comunidad = '$id_comunidad'";
        $con = $this->connect();
        $query = mysqli_query($con,$sql);
        return $query;
    }
}