<?php
include_once 'negocio/user_session.php';

$userSession = new user_session();

if(isset($_SESSION['user'])) {
    include_once 'views/headerSO.php';
}else{
    include_once 'views/headerSC.php';
}

include_once 'views/main.php';
?>

