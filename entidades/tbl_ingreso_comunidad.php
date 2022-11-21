<?php
include_once '../datos/conexion.php';

class tbl_ingreso_comunidad extends Conexion{
    private $id_ingreso_comunidad;
    private $id_kermesse;
    private $id_comunidad;
    private $id_producto;
    private $cant_productos;
    private $total_bonos;
    private $estado;
    private $usuario_creacion;
    private $fecha_creacion;
    private $usuario_modificacion;
    private $fecha_modificacion;
    private $usuario_eliminacion;
    private $fecha_eliminacion;


    public function __GET($k){ return $this->$k; }
    public function __SET($k, $v){ return $this->$k = $v; }

    public function createIngresoComunidad($id_kermesse, $id_comunidad, $id_producto, $cant_productos, $total_bonos, $fecha_creacion, $usuario_creacion){
        $q = "INSERT INTO tbl_ingreso_comunidad (id_kermesse, id_comunidad, id_producto, cant_productos, total_bonos, estado, usuario_creacion, fecha_creacion) VALUES ('$id_kermesse', '$id_comunidad', '$id_producto', '$cant_productos', '$total_bonos', 1, '$usuario_creacion', '$fecha_creacion')";
        $con = $this->connect();
        $query = mysqli_query($con,$q);
    }

    public function createIngresoComunidadDet($id_ingreso_comunidad, $id_bono, $denominacion, $cantidad, $subtotal_bono){
        $q = "INSERT INTO tbl_ingreso_comunidad_det (id_ingreso_comunidad, id_bono, denominacion, cantidad, subtotal_bono) VALUES ('$id_ingreso_comunidad', '$id_bono', '$denominacion', '$cantidad', '$subtotal_bono')";
        $con = $this->connect();
        $query = mysqli_query($con,$q);
    }

    public function getLastId(){
        $q = "SELECT MAX(id_ingreso_comunidad) AS id_ingreso_comunidad FROM tbl_ingreso_comunidad";
        $con = $this->connect();
        $query = mysqli_query($con,$q);
        $row = mysqli_fetch_array($query);
        return $row['id_ingreso_comunidad'];
    }

}