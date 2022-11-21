<?php
include_once 'headerSO.php';
include_once '../entidades/tbl_control_bonos.php';

$bono = new tbl_control_bonos();
$bonos = $bono->getBonos();
?>

<html>
<head>
    <title>Tickets</title>
    <link rel="stylesheet" href="../views/css/tickets.css">
    <link rel="stylesheet" href="../views/css/main.css">
    <link rel="stylesheet" href="../views/css/navBar.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;500;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<section class="form-container">
    <div class="form">
        <h1 class="title">Comprar tickets</h1>
        <form action="ready.php" method="POST">
            <div class="form-group">
                <?php
                    if($bonos){
                        while($row = $bonos->fetch_array()) {
                            $id = $row['id_bono'];
                            $nombre = $row['nombre'];
                            $valor = $row['valor'];
                        ?>
                            <input class="" type="text" value="Bono de <?php echo $valor?>" readonly>
                            <input class="rigth-input cant" type="number" name="cant" placeholder="0">
                        <?php
                        }
                    }
                ?>
                <input class="button" type="submit" value="Comprar">
            </div>
        </form>
    </div>
</section>

<script src="js/tickets.js"></script>
</body>
</html>
