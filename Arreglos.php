<?php

//Primera forma
$semana = array('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo');

for ($i = 0; $i < count($semana); $i++) {
    echo "Día " . ($i + 1) . ": " . $semana[$i] . "<br>";
}

//agregar 
$semana [7] = 'Angel Patiño';
$semana [10] = 'Diaz';
$semana [8] = 'Paul';
//echo $semana;

// Segunda forma
//$semana = array['Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo'];
$arreglo2 = array('cadenas de texto', 1, array ('asd',123), true);
echo $semana[4]. '<br>';


?>