<?php
include_once 'headerSO.php';
include_once '../entidades/tbl_control_bonos.php';
include_once '../entidades/tbl_productos.php';

$bono = new tbl_control_bonos();
$bonos = $bono->getBonos();

$producto = new tbl_productos();
$productos = $producto->showProducts();
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
    <div class="form" style="height: 470px">
        <h1 class="title">Ingresos</h1>
        <form action="../negocio/ingresos.php" method="POST">
            <div class="form-group">
                <h3>Bonos</h3>
                <?php
                if($bonos){
                    $inte = 1;
                    while($row = $bonos->fetch_array()) {
                        $id = $row['id_bono'];
                        $nombre = $row['nombre'];
                        $valor = $row['valor'];
                        ?>
                        <input class="" type="text" value="Bono de <?php echo $valor ?>" readonly>
                        <input class="rigth-input cant" type="number" name="cant<?php echo $inte?>" placeholder="0">
                        <?php
                        $inte++;
                    }
                }
                ?>
                <h3 style="margin-top: 20px">Productos</h3>
                <?php
                if($productos){
                    $inte = 1;
                    while($row = $productos->fetch_array()) {
                        $id = $row['id_producto'];
                        $nombre = $row['nombre'];
                        ?>
                        <input class="" type="text" name="producto<?php echo $inte?>" id="producto<?php echo $inte?>" value="<?php echo $nombre?>" readonly>
                        <input class="rigth-input cant" type="number" id="prod<?php echo $inte?>" name="prod<?php echo $inte?>" placeholder="0">
                        <?php
                        $inte++;
                    }
                }
                ?>
                <input class="button" type="submit" value="Registrar ingresos">
            </div>
        </form>
    </div>
</section>

<script src="js/tickets.js"></script>
</body>
</html>
