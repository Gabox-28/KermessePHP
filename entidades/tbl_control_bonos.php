<?php
include_once '../datos/conexion.php';
class tbl_control_bonos extends Conexion
{
    private $id_bono;
    private $nombre;
    private $valor;
    private $estado;

    public function getBonos()
    {
        $q = "SELECT * FROM tbl_control_bonos WHERE estado = 1";
        $con = $this->connect();
        $query = mysqli_query($con, $q);
        return $query;
    }
}