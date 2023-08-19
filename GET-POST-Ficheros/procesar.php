<?php

// $nombre = $_GET ['nombre'];
// $asunto = $_GET ['asunto'];
// $mensaje = $_GET ['mensaje'];

$nombre = $_POST ['nombre'];
$asunto = $_POST ['asunto'];
$mensaje = $_POST ['mensaje'];
echo 'Informacion recibida:';  
echo $mensaje."<br>";
echo $nombre."<br>";
echo $mensaje."<br>"; 
?>