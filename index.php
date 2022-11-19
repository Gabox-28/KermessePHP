<?php
include_once 'negocio/user_session.php';
require_once './controladores/main_controller.php';
require_once './controladores/main_cliente_controller.php';

$userSession = new user_session();

if(isset($_SESSION['user'])) {
    $controller = new main_cliente_controller();
    $controller->indexCliente();
}else{
    $controller = new Main_controller();
    $controller->indexMain();
}
?>

