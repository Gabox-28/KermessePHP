<?php

class tbl_arqueocaja{
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

    public function __construct($idKermesse, $idArqueoCaja, $fechaArqueo, $granTotal, $usuario_creacion, $fecha_creacion, $usuario_modificacion, $fecha_modificacion, $usuario_eliminacion, $fecha_eliminacion, $estado) {
        $this->idKermesse = $idKermesse;
        $this->idArqueoCaja = $idArqueoCaja;
        $this->fechaArqueo = $fechaArqueo;
        $this->granTotal = $granTotal;
        $this->usuario_creacion = $usuario_creacion;
        $this->fecha_creacion = $fecha_creacion;
        $this->usuario_modificacion = $usuario_modificacion;
        $this->fecha_modificacion = $fecha_modificacion;
        $this->usuario_eliminacion = $usuario_eliminacion;
        $this->fecha_eliminacion = $fecha_eliminacion;
        $this->estado = $estado;
    }

    public function __GET($k){ return $this->$k; }
    public function __SET($k, $v){ return $this->$k = $v; }
}