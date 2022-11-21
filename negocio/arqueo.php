<?php
include_once '../entidades/tbl_arqueocaja.php';
include_once '../entidades/tbl_usuario.php';
include_once '../negocio/user_session.php';

$arqueo = new tbl_arqueocaja();
$userSession = new user_session();
$user = new tbl_usuario();

$concepto = $_POST['concepto'];

$C10 = $_POST['cantC1'];
$C20 = $_POST['cantC2'];
$C50 = $_POST['cantC3'];
$C100 = $_POST['cantC4'];
$C200 = $_POST['cantC5'];
$C500 = $_POST['cantC6'];
$C1000 = $_POST['cantC7'];
$CTotal = ($C10*10) + ($C20*20) + ($C50*50) + ($C100*100) + ($C200*200) + ($C500*500) + ($C1000*1000);

$D1 = $_POST['cantD1'];
$D5 = $_POST['cantD2'];
$D10 = $_POST['cantD3'];
$D20 = $_POST['cantD4'];
$DTotal = $D1 + ($D5*5) + ($D10*10) + ($D20*20);

$tasaCambio = $arqueo->getTasaCambio();
$DTotalC = $DTotal * $tasaCambio;

$ATotal = $CTotal + $DTotalC;

$fechaActual= date("Y-m-d H:i:s");

$id_user = $user->getId($userSession->getCurrentUser());

$arqueo->createArqueoCaja(1, $fechaActual, $ATotal, $id_user, $fechaActual, 1);

