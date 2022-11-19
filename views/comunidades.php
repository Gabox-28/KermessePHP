<?php
include_once '../entidades/tbl_comunidad.php';

$comunidad = new tbl_comunidad();
$comunidades = $comunidad->leerComunidades();

?>

<html>
<head>
    <title>Comunidades</title>
    <link rel="stylesheet" href="../views/css/main.css">
    <link rel="stylesheet" href="../views/css/navBar.css">
    <link rel="stylesheet" href="../views/css/comunidades.css">

    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;500;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <section>
        <div class="container">
            <?php
                if($comunidades){
                    while($row = $comunidades->fetch_array()){
                        $id = $row['id_comunidad'];
                        $nombre = $row['nombre'];
            ?>
            <div class="row">
                <img class="img" src="../views/img/community.png" alt="Community image">
                <form action="../views/comunidad.php" method="get">
                    <input type="hidden" name="ID" id="ID" value="<?php echo $id?>">
                    <input type="submit" name="action" class="nombre" value="<?php echo $nombre?>">
                </form>
            </div>
            <?php
                    }
                }
            ?>

        </div>
    </section>
</body>
</html>
