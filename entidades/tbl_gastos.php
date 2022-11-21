<?php
include_once '../datos/conexion.php';

class tbl_gastos extends Conexion {
    private $id_registro_gasto;
    private $idKermesse;
    private $idCatGastos;
    private $fechaGasto;
    private $concepto;
    private $monto;
    private $usuario_creacion;
    private $fecha_creacion;
    private $usuario_modificacion;
    private $fecha_modificacion;
    private $usuario_eliminacion;
    private $fecha_eliminacion;
    private $estado;


    public function __GET($k){
        return $this->$k;
    }

    public function __SET($k, $v){
        return $this->$k = $v;
    }

    public function createGasto($concepto, $monto, $categoria, $fechaGasto, $fechaCreacion, $usuario){

        $q = "INSERT INTO tbl_gastos (idKermesse, idCatGastos, fechaGasto, concepto, monto, usuario_creacion, fecha_creacion, estado) VALUES (1,'$categoria','$fechaGasto','$concepto','$monto','$usuario','$fechaCreacion',1)";
        $con = $this->connect();
        $query = mysqli_query($con,$q);
    }

    public function getCategorias(){
        $q = "SELECT * FROM tbl_categoria_gastos";
        $con = $this->connect();
        $query = mysqli_query($con,$q);
        return $query;
    }
}