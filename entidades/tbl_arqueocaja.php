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

    public function createArqueoCaja($idKermesse, $fechaArqueo, $granTotal, $usuario_creacion, $fecha_creacion, $estado){
        $q = "INSERT INTO tbl_arqueocaja (idKermesse, fechaArqueo, granTotal, usuario_creacion, fecha_creacion, estado) VALUES ('$idKermesse', '$fechaArqueo', '$granTotal', '$usuario_creacion', '$fecha_creacion', '$estado')";
        $con = $this->connect();
        $query = mysqli_query($con,$q);
    }

    public function createArqueoCajaDet($idArqueoCaja, $idMoneda, $idDenominacion, $cantidad, $subtotal){
        $q = "INSERT INTO tbl_arqueocaja_det (idArqueoCaja, idMoneda, idDenominacion, cantidad, subtotal) VALUES ('$idArqueoCaja', '$idMoneda', '$idDenominacion', '$cantidad', '$subtotal')";
        $con = $this->connect();
        $query = mysqli_query($con,$q);
    }

    public function getTasaCambio(){
        $q = "SELECT * FROM tasacambio_det WHERE id_tasaCambio = 1";
        $con = $this->connect();
        $query = mysqli_query($con,$q);
        $row = mysqli_fetch_array($query);

        return $row['tipoCambio'];
    }
}