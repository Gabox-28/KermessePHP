<?php

class rol_usuario{
    private $id_rol_usuario;
    private $tbl_rol_id_rol;
    private $tbl_usuario_id_usuario;

    public function __construct($id_rol_usuario, $tbl_rol_id_rol, $tbl_usuario_id_usuario) {
        $this->id_rol_usuario = $id_rol_usuario;
        $this->tbl_rol_id_rol = $tbl_rol_id_rol;
        $this->tbl_usuario_id_usuario = $tbl_usuario_id_usuario;
    }

    public function __GET($k){
        return $this->$k;
    }

    public function __SET($k, $v){
        return $this->$k = $v;
    }
}