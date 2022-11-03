<?php
include_once '../entidades/tbl_usuario.php';
include_once '../negocio/user_session.php';

if(isset($_POST['user']) && isset($_POST['pwd'])){
    $userForm = $_POST['user'];
    $pwdForm = $_POST['pwd'];

    $userSession = new user_session();
    $user = new tbl_usuario();

    if($user -> userExists($userForm, $pwdForm)){
        $userSession->setCurrentUser($userForm);

        //$user->setUsuario($userForm);

        header('Location: ../index.php');
    }else{
        $errorLogin = "Nombre de usuario y/o contraseña incorrectos";
        echo "error";
    }
}