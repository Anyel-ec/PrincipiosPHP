<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio</title>
</head>
<body>
    <?php
    $nombre = "Angel Patiño";
    ?>
    <!-- <a href="recibir.php?nombre=$nombre">
        Link para enviar el nombre</a> -->
    <a href="recibir.php?nombre=<?php echo $nombre?>">
        Link para enviar el nombre</a>
</body>
</html>