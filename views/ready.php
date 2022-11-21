<?php
include_once 'headerSO.php';
?>

<html>
<head>
    <title>Tickets</title>
    <link rel="stylesheet" href="../views/css/ready.css">
    <link rel="stylesheet" href="../views/css/main.css">
    <link rel="stylesheet" href="../views/css/home.css">
    <link rel="stylesheet" href="../views/css/navBar.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;500;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body onload="delayRedirect()">
<section>
    <div class="content">
        <img class="img" src="img/check.png" alt="Ready img">
    </div>
    <div class="text-title">
        <h1 class="title-tickets">¡Tickets comprados!</h1>
        <a href="/" class="btn">Aceptar</a>
        <div style="margin-top: 20px" id="delayMsg"></div>
    </div>
</section>

<script>
    function delayRedirect(){
        document.getElementById('delayMsg').innerHTML = 'Será direccionado en <span id="countDown">5</span> segundos...';
        var count = 5;
        setInterval(function(){
            count--;
            document.getElementById('countDown').innerHTML = count;
            if (count == 0) {
                window.location = 'http://localhost:63342/Kermesse/index.php';
            }
        },1000);
    }
</script>
</body>
</html>
