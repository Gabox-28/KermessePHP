<?php

class tbl_ingreso_comunidad_det{
    private $id_ingreso_comunidad;
    private $id_bono;
    private $denominacion;
    private $cantidad;
    private $subtotal_bono;
    private $id_ingreso_comunidad_det;

    public function __construct($id_ingreso_comunidad, $id_bono, $denominacion, $cantidad, $subtotal_bono, $id_ingreso_comunidad_det) {
        $this->id_ingreso_comunidad = $id_ingreso_comunidad;
        $this->id_bono = $id_bono;
        $this->denominacion = $denominacion;
        $this->cantidad = $cantidad;
        $this->subtotal_bono = $subtotal_bono;
        $this->id_ingreso_comunidad_det = $id_ingreso_comunidad_det;
    }

    public function __GET($k){ return $this->$k; }
    public function __SET($k, $v){ return $this->$k = $v; }
}