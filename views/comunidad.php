<?php
include_once '../entidades/tbl_comunidad.php';
include_once '../entidades/tbl_productos.php';
include_once 'headerSO.php';

$idForm = $_GET['ID'];

$comunidad = new tbl_comunidad();
$datos = $comunidad->verComunidad($idForm);

$producto = new tbl_productos();
$productos = $producto->showProductsByCommunity($idForm);
?>

<html>
<head>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/navBar.css">
    <link rel="stylesheet" href="./css/comunidad.css">

    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;500;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <section class="title">
        <div class="container">
            <div class="information">
                <?php
                $row = $datos->fetch_array();
                $nombre = $row['nombre'];
                $responsable = $row['responsable'];
                $desc_contribucion = $row['desc_contribucion'];
                $estado = $row['estado'];
                ?>

                <h2><?php echo $nombre?></h2>
                <div class="captions">
                    <h3>Responsable: <?php echo $responsable?></h3>
                    <h3>Descripción de la contribución: <?php echo $desc_contribucion?></h3>
                </div>
            </div>
            <div class="image">
                <img class="img-title" src="img/shop2.jpg" alt="">
            </div>

        </div>
    </section>

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


