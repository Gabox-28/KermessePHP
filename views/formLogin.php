<?php

if($_GET['error'] != null){
    $error = $_GET['error'];
}else{
    $error = 0;
}
?>

<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;500;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<section class="form-container">
    <div class="form">
        <h1 class="title">Iniciar sesión</h1>

        <?php
            if($error == 1){
                echo "<h5 class='advert-txt'>Usuario o contraseña incorrectos</h5>";
            }
        ?>

        <form action="../negocio/login.php" method="POST">
            <div class="form-group">
                <input style="margin-top: 15px" type="text" name="user" id="user" placeholder="Usuario">
                <input style="margin-top: 20px" type="password" name="pwd" id="pwd" placeholder="Contraseña">
                <input class="button" type="submit" value="Iniciar sesión">
            </div>
        </form>
        <h5 style="margin-top: 20px">¿Aún no tienes cuenta? <span ><a style="color: #3a8aff" href="./formSignin.php">Regístrate aqui</a></span></h5>
    </div>
</section>
<script src="js/login.js"></script>
</body>

</html>
