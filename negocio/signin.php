<?php
include_once '../entidades/tbl_usuario.php';
include_once '../negocio/user_session.php';

$usuario = new tbl_usuario();
$userSession = new user_session();

$EmailForm = $_POST['email'];

if($usuario->searchByEmail($EmailForm)){
    header('location: ../views/formSignin.php?error=1');
}

$UsuarioForm = $_POST['user'];

if($usuario->searchByUser($UsuarioForm)){
    header('location: ../views/formSignin.php?error=2');
}

$pwdForm = $_POST['pwd'];
$pwd2Form = $_POST['pwd2'];

if($pwdForm != $pwd2Form){
    header('location: ../views/formSignin.php?error=3');
}

$usuario->insertarUsuario($_POST['nombres'], $_POST['apellidos'], $_POST['email'], $_POST['user'], $_POST['pwd']);
$userSession->setCurrentUser($UsuarioForm);
header('location: ../index.php');