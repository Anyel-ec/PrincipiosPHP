<?php
//Establecer nombre del archivo
$fichero = "frutas.txt";
//Almacenar en una variable el identificador del fichero
$identificacion = fopen($fichero, "w"); //a+ agregar   
//agregar una fruta al fichero/archivo
$fruta = "Manzana";
fwrite($identificacion, $fruta);
fclose($identificacion);
//Leer todo el archivo y poner el contenido en una variable
$contenido = file("frutas.txt");
foreach ($contenido as $element) {
    echo $element;
}
?>