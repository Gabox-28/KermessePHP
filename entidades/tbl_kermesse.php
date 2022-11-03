<?php

class tbl_kermesse{
    private $id_kermesse;
    private $nombre;
    private $fInicio;
    private $fFial;
    private $descripcion;
    private $estado;
    private $usuario_creacion;
    private $fecha_creacion;
    private $usuario_modificacion;
    private $fecha_modificacion;
    private $usuario_eliminacion;
    private $fecha_eliminacion;

    public function __construct($id_kermesse, $nombre, $fInicio, $fFial, $descripcion, $estado, $usuario_creacion, $fecha_creacion, $usuario_modificacion, $fecha_modificacion, $usuario_eliminacion, $fecha_eliminacion) {
        $this->id_kermesse = $id_kermesse;
        $this->nombre = $nombre;
        $this->fInicio = $fInicio;
        $this->fFial = $fFial;
        $this->descripcion = $descripcion;
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