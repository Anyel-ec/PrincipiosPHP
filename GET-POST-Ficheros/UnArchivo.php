<?php
$nombre = "";
$asunto = "";
$mensaje = "";
$nombre = $_POST ['nombre'];
$asunto = $_POST ['asunto'];
$mensaje = $_POST ['mensaje'];
echo 'Informacion recibida:';  
echo $mensaje."<br>";
echo $nombre."<br>";
echo $mensaje."<br>"; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de Informacion</title>
</head>
<body>
    <!-- se muestra en la URL los datos -->
    <!-- <form action="procesar.php" method="get"> -->
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">  
    <!-- PHP_SELF o REQUEST_URI -->
    <label for="">Nombre: </label>
    <input type="text" name="nombre" placeholder="Nombre: ">
    <label for="">Asunto: </label>
    <input type="text" name="asunto" placeholder="Asunto">
    <label for="">Mensaje: </label>
    <input type="text" name="mensaje" placeholder="Mensaje">
    <input type="submit" value="enviado" >
    </form>
</body>
</html>