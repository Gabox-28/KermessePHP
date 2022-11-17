<?php
?>

<html>
<head>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/signin.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;500;700&display=swap" rel="stylesheet">
    <meta viewport="width=device-width, initial-scale=1.0">
</head>
<body>
<section class="form-container">
    <div class="form">
        <h1 class="title">Registrarse</h1>
        <form action="../negocio/login.php" method="POST">
            <div class="form-group">
                <input type="text" name="name" id="name" placeholder="Nombres">
                <input class="rigth-input" type="lastname" name="lastname" id="lastname" placeholder="Apellidos">
                <div class="large-input">
                    <input class="large-input" name="email" id="email" placeholder="Correo electrónico">
                </div>
                <div class="large-input">
                    <input class="large-input" typer="text" name="user" id="user" placeholder="Usuario">
                </div>
                <input type="password" name="pwd" id="pwd" placeholder="Contraseña">
                <input class="rigth-input" type="password" name="pwd2" id="pwd2" placeholder="Confirmar contraseña">
                <input class="button" type="submit" value="Registrarse">
            </div>
        </form>
    </div>
</section>
</body>
</html>
