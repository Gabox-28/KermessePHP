<?php
include_once '../entidades/tbl_usuario.php';
include_once '../negocio/user_session.php';

$usuario = new tbl_usuario();
$userSession = new user_session();

$EmailForm = $_POST['email'];
$UsuarioForm = $_POST['user'];
$pwdForm = $_POST['pwd'];
$pwd2Form = $_POST['pwd2'];

$valid = false;
$valid = $usuario->validEmail($EmailForm);

if($valid == true){
    $valid = $usuario->validUser($UsuarioForm);
    if ($valid == true) {
        if ($pwdForm == $pwd2Form){
            $usuario->insertarUsuario($_POST['name'], $_POST['lastname'], $_POST['email'], $_POST['user'], $_POST['pwd']);
            $userSession->setCurrentUser($UsuarioForm);
            header('location: ../index.php');
        }else{
            header('location: ../views/formSignin.php?error=3');
        }
    }else{
        header('location: ../views/formSignin.php?error=2');
    }
}else{
    header('location: ../views/formSignin.php?error=1');
}