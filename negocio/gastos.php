<?php

include_once '../entidades/tbl_gastos.php';
include_once '../entidades/tbl_usuario.php';
include_once '../negocio/user_session.php';

$gasto = new tbl_gastos();
$userSession = new user_session();
$user = new tbl_usuario();

$fechaActual= date("Y-m-d H:i:s");
$id_user = $user->getId($userSession->getCurrentUser());

$gasto->createGasto($_POST['concepto'], $_POST['monto'], $_POST['categoria'], $_POST['fechaGasto'], $fechaActual, $id_user);

header('location: http://localhost:63342/Kermesse/views/index.php');