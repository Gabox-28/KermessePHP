<?php
include 'negocio/user_session.php';

$userSession = new user_session();

if(isset($_SESSION['user'])) {
    include 'views/headerSO.php';
}else{
    include 'views/headerSC.php';
}
?>
<html>
    <head>
        <title>Kermesse</title>
        <link rel="stylesheet" href="./views/css/main.css">
        <link rel="stylesheet" href="views/css/home.css">
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;500;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <section class="main-container">
            <div class="container-left">
                <div class="row">
                    <h1 class="title"><span>¡Bienvenido a </span> <br> <span class="title-color">Kermesse</span> <br>  <span>2022!</span></h1>
                    <p class="caption">La plataforma que te permite comprar productos <br>de las comunidades de la FAO</p>
                    <a href="/" class="btn">Comprar</a>
                </div>
            </div>

            <div class="row-rigth">
                <img src="./views/img/compras.png" alt="compras" id="compras">
            </div>

            <div class="container-right">

            </div>
        </section>
    </body>
</html>
