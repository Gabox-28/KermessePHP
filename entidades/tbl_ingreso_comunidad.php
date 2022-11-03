<?php

class tbl_ingreso_comunidad{
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

    public function __construct($id_ingreso_comunidad, $id_kermesse, $id_comunidad, $id_producto, $cant_productos, $total_bonos, $estado, $usuario_creacion, $fecha_creacion, $usuario_modificacion, $fecha_modificacion, $usuario_eliminacion, $fecha_eliminacion) {
        $this->id_ingreso_comunidad = $id_ingreso_comunidad;
        $this->id_kermesse = $id_kermesse;
        $this->id_comunidad = $id_comunidad;
        $this->id_producto = $id_producto;
        $this->cant_productos = $cant_productos;
        $this->total_bonos = $total_bonos;
        $this->estado = $estado;
        $this->usuario_creacion = $usuario_creacion;
        $this->fecha_creacion = $fecha_creacion;
        $this->usuario_modificacion = $usuario_modificacion;
        $this->fecha_modificacion = $fecha_modificacion;
        $this->usuario_eliminacion = $usuario_eliminacion;
        $this->fecha_eliminacion = $fecha_eliminacion;
    }

    public function __GET($k){ return $this->$k; }
    public function __SET($k, $v){ return $this->$k = $v; }
}