<?php
include_once 'user_session.php';
require_once '../controladores/comunidades_controller.php';

$userSession = new user_session();

if(isset($_SESSION['user'])) {
    include_once '../views/headerSO.php';
    $controller = new comunidades_controller();
    $controller->indexComunidades();
}else{
    include_once '../views/headerSC.php';
    $controller = new comunidades_controller();
    $controller->indexComunidades();
}