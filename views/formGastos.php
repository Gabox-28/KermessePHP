<?php
include_once 'headerSO.php';
include_once '../entidades/tbl_gastos.php';

$gasto = new tbl_gastos();
$gastos = $gasto->getCategorias();
?>

<html>
<head>
<title>FAO Kermesse</title>
    <link rel="stylesheet" href="./css/tickets.css">
    <link rel="stylesheet" href="../views/css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;500;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<section class="form-container">
    <div class="form">
        <h1 class="title">Gastos</h1>
        <form action="../negocio/gastos.php" method="POST">
            <div class="form-group">
                <div class="large-input">
                    <input class="large-input" type="text" name="concepto" id="concepto" placeholder="Concepto" required>
                </div>
                <div class="large-input">
                    <input class="large-input" type="number" name="monto" id="monto" placeholder="Monto" required>
                </div>
                <div class="large-input">
                    <select class="large-input" name="categoria" id="categoria" required>
                        <?php
                            while($row = $gastos->fetch_array()){
                                $nombre = $row['nombre_categoria'];
                                $id_categoria = $row['id_categoria_gastos'];
                                ?>
                                <option value="<?php echo $id_categoria?>"><?php echo $nombre?></option>
                                <?php
                            }
                        ?>
                    </select>
                </div>
                <div class="large-input">
                    <input class="large-input" type="date" name="fechaGasto" id="fechaGasto" placeholder="" required>
                </div>
                <input class="button" type="submit" value="Registrar gasto">
            </div>
        </form>
    </div>
</section>


</body>
</html>
