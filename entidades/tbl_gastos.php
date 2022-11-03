<?php

class tbl_gastos{
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

    public function __construct($id_registro_gasto, $idKermesse, $idCatGastos, $fechaGasto, $concepto, $monto, $usuario_creacion, $fecha_creacion, $usuario_modificacion, $fecha_modificacion, $usuario_eliminacion, $fecha_eliminacion, $estado){
        $this->id_registro_gasto = $id_registro_gasto;
        $this->idKermesse = $idKermesse;
        $this->idCatGastos = $idCatGastos;
        $this->fechaGasto = $fechaGasto;
        $this->concepto = $concepto;
        $this->monto = $monto;
        $this->usuario_creacion = $usuario_creacion;
        $this->fecha_creacion = $fecha_creacion;
        $this->usuario_modificacion = $usuario_modificacion;
        $this->fecha_modificacion = $fecha_modificacion;
        $this->usuario_eliminacion = $usuario_eliminacion;
        $this->fecha_eliminacion = $fecha_eliminacion;
        $this->estado = $estado;
    }

    public function __GET($k){
        return $this->$k;
    }

    public function __SET($k, $v){
        return $this->$k = $v;
    }
}