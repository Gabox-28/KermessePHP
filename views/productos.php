<?php
include_once '../entidades/tbl_productos.php';

$producto = new tbl_productos();
$productos = $producto->showProducts();
?>

<html>
<head>
    <title>Productos</title>
    <link rel="stylesheet" href="../views/css/main.css">
    <link rel="stylesheet" href="../views/css/navBar.css">
    <link rel="stylesheet" href="../views/css/productos.css">

    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;500;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<section class="products">
    <h1 class="products-title">Productos</h1>
    <div class="container-p">
        <?php
        if($productos){
            while($row = $productos->fetch_array()){
                $nombre = $row['nombre'];
                ?>
                <div class="row">
                    <img class="img" src="../views/img/rosquillas.png" alt="Community image">
                    <h1><?php echo $nombre?></h1>
                </div>
                <?php
            }
        }
        ?>
    </div>
</section>
</body>
</html>
