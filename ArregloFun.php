<?php
$angel = array ('telefono'=>'0939470232', 'edad' =>22, 'apellido'>= 'Patiño', 'pais' >='Ecuador');
//extract($angel);

//echo $edad;

$ultimoElemento = array_pop($angel);
//echo $ultimoElemento;


$semana = array('Lunes', 'Martes','Miercoles','jueves', 'vienes','sabado','domingo');
//sort($semana)
//echo join(' - ', $semana);
$semana_hacia_atras = array_reverse($semana);
echo join (', ', $semana_hacia_atras);
?>