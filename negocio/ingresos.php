<?php

include_once '../entidades/tbl_comunidad.php';
include_once '../entidades/tbl_ingreso_comunidad.php';
include_once '../entidades/tbl_productos.php';
include_once '../negocio/user_session.php';
include_once '../entidades/tbl_usuario.php';

$B25 = $_POST['cant1'];
$B50 = $_POST['cant2'];
$B100 = $_POST['cant3'];
$BTotal = $B25 + $B50 + $B100;

$nameProd = $_POST['producto1'];
$prod1 = $_POST['prod1'];

$comunidad = new tbl_comunidad();
$ingreso = new tbl_ingreso_comunidad();
$userSession = new user_session();
$producto = new tbl_productos();
$user = new tbl_usuario();

$fechaActual= date("Y-m-d H:i:s");

$id_user = $user->getId($userSession->getCurrentUser());
$nombre = $user->getNombre($userSession->getCurrentUser());
$id_comunidad = $comunidad->searchByResponsable($nombre);
$lastId = $ingreso->getLastId();

$id_prod = $producto->searchByName($nameProd);

$ingreso->createIngresoComunidad(1, $id_comunidad, $id_prod, $prod1, $BTotal, $fechaActual, $id_user);


if($B25>0){
    $ingreso->createIngresoComunidadDet($lastId +1, 1, 25, $B25, $B25*25);
}

if($B50>0){
    $ingreso->createIngresoComunidadDet($lastId +1, 2, 50, $B50, $B50*50);
}

if($B100>0){
    $ingreso->createIngresoComunidadDet($lastId +1, 3, 100, $B100, $B100*100);
}

header('location: http://localhost:63342/Kermesse/views/index.php');
