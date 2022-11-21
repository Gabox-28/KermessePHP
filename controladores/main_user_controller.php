<?php
include_once '../entidades/tbl_usuario.php';
include_once '../negocio/user_session.php';

class main_user_controller{

    public function index(){

        $userSession = new user_session();
        $user = new tbl_usuario();

        if(isset($_SESSION['user'])) {
            $rol = $user->getRol($userSession->getCurrentUser());
            if(!$rol){
                $id_user = $user->getId($userSession->getCurrentUser());
                $user->setRol($id_user, 2);
                header('location: ../index.php');
            }
            $main = new main_user_controller();
            if($rol == 1){
                require_once '../views/headerSO.php';
                require_once '../views/mainCajero.php';
            }else if($rol == 2){
                require_once '../views/headerSO.php';
                require_once '../views/mainCliente.php';
            }else if ($rol == 3){
                require_once '../views/headerSO.php';
                require_once '../views/mainResponsable.php';
            }
        }else{
            require_once '../views/headerSC.php';
            require_once '../views/main.php';
        }
    }
}