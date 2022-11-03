<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;500;700&display=swap" rel="stylesheet">

</head>

<body>
    <section class="form-container">
        <div class="form">
            <h1 class="title">Iniciar sesión</h1>
            <form action="../negocio/login.php" method="POST">
                <div class="form-group">
                    <input type="" name="user" id="user" placeholder="Usuario">
                    <input type="password" name="pwd" id="pwd" placeholder="Password">
                    <input class="button" type="submit" value="Iniciar sesión">
                </div>
            </form>
        </div>
    </section>
    <script src="js/login.js"></script>
</body>

</html>
