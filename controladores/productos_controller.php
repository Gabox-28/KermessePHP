<?php
include_once '../negocio/user_session.php';
class productos_controller{

    public function indexProductos(){
        $userSession = new user_session();
        if(isset($_SESSION['user'])) {
            include_once '../views/headerSO.php';
            require_once '../views/productos.php';
        }else{
            include_once '../views/headerSC.php';
            require_once '../views/productos.php';
        }
    }
}