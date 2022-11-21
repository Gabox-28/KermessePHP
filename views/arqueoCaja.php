<?php
include_once '../entidades/tbl_arqueocaja.php';

$arqueo = new tbl_arqueocaja();
$cordobas = $arqueo->getCordobas();
$dolares = $arqueo->getDolares();
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Arqueo de Caja</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/navBar.css">
    <link rel="stylesheet" href="css/arqueoCaja.css">

    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;500;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<section class="form-container">
    <div class="form" style="height: 950px">
        <h1 class="title">Arqueo Caja</h1>
        <form action="../negocio/arqueo.php" method="POST">
            <div class="form-group">
                <div class="large-input">
                    <input class="large-input" type="text" name="concepto" id="concepto" placeholder="Concepto" required>
                </div>
                <h3 style="margin-top: 20px">Córdobas</h3>
                <?php
                if($cordobas){
                    $inte = 1;
                    while($row = $cordobas->fetch_array()) {
                        $id = $row['id_Denominacion'];
                        $nombre = $row['valor_letras'];
                        $valor = $row['valor'];
                        ?>
                        <input class="" type="text" value="<?php echo $valor ?> Córdobas" readonly>
                        <input class="rigth-input cant" type="number" name="cantC<?php echo $inte?>" placeholder="0">
                        <?php
                        $inte++;
                    }
                }
                ?>
                <h3 style="margin-top: 20px">Dólares</h3>
                <?php
                if($dolares){
                    $inte = 1;
                    while($row = $dolares->fetch_array()) {
                        $id = $row['id_Denominacion'];
                        $nombre = $row['valor_letras'];
                        $valor = $row['valor'];
                        ?>
                        <input class="" type="text" value="<?php echo $valor ?> Dolares" readonly>
                        <input class="rigth-input cant" type="number" name="cantD<?php echo $inte?>" placeholder="0">
                        <?php
                        $inte++;
                    }
                }
                ?>
                <input class="button" type="submit" value="Registrar gasto">
            </div>
        </form>
    </div>
</section>

</body>
</html>

