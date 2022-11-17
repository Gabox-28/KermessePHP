<?php
include_once 'headerSO.php';
include_once '../entidades/tbl_comunidad.php';


?>

<html>
<head>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/navBar.css">
    <link rel="stylesheet" href="./css/comunidades.css">

    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;500;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <section>
        <div class="container">
            <?php
                $comunidad = new tbl_comunidad();
                $comunidades = $comunidad->leerComunidades();

                if($comunidades){
                    while($row = $comunidades->fetch_array()){
                        $id = $row['id_comunidad'];
                        $nombre = $row['nombre'];
            ?>
            <div class="row">
                <img class="img" src="./img/community.png" alt="Community image">
                <form action="./comunidad.php" method="get">
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
