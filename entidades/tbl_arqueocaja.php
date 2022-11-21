<?php
include_once '../datos/conexion.php';

class tbl_arqueocaja extends Conexion {
    private $idKermesse;
    private $idArqueoCaja;
    private $fechaArqueo;
    private $granTotal;
    private $usuario_creacion;
    private $fecha_creacion;
    private $usuario_modificacion;
    private $fecha_modificacion;
    private $usuario_eliminacion;
    private $fecha_eliminacion;
    private $estado;

    public function __GET($k){ return $this->$k; }
    public function __SET($k, $v){ return $this->$k = $v; }

    public function getCordobas(){
        $q = "SELECT * FROM tbl_denominacion WHERE idMoneda = 1";
        $con = $this->connect();
        $query = mysqli_query($con,$q);
        return $query;
    }

    public function getDolares(){
        $q = "SELECT * FROM tbl_denominacion WHERE idMoneda = 2";
        $con = $this->connect();
        $query = mysqli_query($con,$q);
        return $query;
    }
}