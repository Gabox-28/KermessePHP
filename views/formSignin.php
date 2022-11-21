<?php
if($_GET['error'] != null){
    $error = $_GET['error'];
}else{
    $error = 0;
}
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
        <?php
            if($error == 1){
                echo "<h5 class='advert-txt'>El correo ya está en uso</h5>";
            }

            if($error == 2){
                echo "<h5 class='advert-txt'>El usuario ya existe</h5>";
            }

            if($error == 3){
                echo "<h5 class='advert-txt'>Las contraseñas no coinciden</h5>";
            }

        ?>

        <form action="../negocio/signin.php" method="POST">
            <div class="form-group">
                <input type="text" name="name" id="name" placeholder="Nombres" required>
                <input class="rigth-input" type="lastname" name="lastname" id="lastname" placeholder="Apellidos" required>
                <div class="large-input">
                    <input class="large-input" type="email" name="email" id="email" placeholder="Correo electrónico" required>
                </div>
                <div class="large-input">
                    <input class="large-input" typer="text" name="user" id="user" placeholder="Usuario" required>
                </div>
                <input type="password" name="pwd" id="pwd" placeholder="Contraseña" required>
                <input class="rigth-input" type="password" name="pwd2" id="pwd2" placeholder="Confirmar contraseña" required>
                <input class="button" type="submit" value="Registrarse">
            </div>
        </form>
    </div>
</section>
</body>
</html>
