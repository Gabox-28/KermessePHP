<?php
include_once '../datos/conexion.php';

class tbl_productos extends Conexion{
    private $id_comunidad;
    private $id_cat_producto;
    private $nombre;
    private $descripcion;
    private $cantidad;
    private $preciov_sugerido;
    private $estado;

    public function __GET($k){ return $this->$k; }
    public function __SET($k, $v){ return $this->$k = $v; }

    public function showProducts(){
        $q = "SELECT * FROM tbl_productos";
        $con = $this->connect();
        $query = mysqli_query($con,$q);
        return $query;
    }

    public function showProductsByCommunity($id_comunidad){
        $q = "SELECT * FROM tbl_productos WHERE id_comunidad = '$id_comunidad'";
        $con = $this->connect();
        $query = mysqli_query($con,$q);
        return $query;
    }

    public function searchByName($nombre){
        $q = "SELECT * FROM tbl_productos WHERE nombre = '$nombre'";
        $con = $this->connect();
        $query = mysqli_query($con,$q);
        $row = mysqli_fetch_array($query);
        return $row['id_producto'];
    }
}