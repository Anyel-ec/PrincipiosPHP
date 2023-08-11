<?php
//Se pueden crear varios arreglos en uno solo. 
//Se lo conoce como arreglos multidimensional.
$amigos = array(
    array('Alejandro',40),
    array('Cesar', 31),
    array('Angel', 21)
);
//se imprime mediante su posicion. 
echo $amigos[2][0]; //Busca la 2 posicion (0,1,2) y su posicion cero (0) 'Angel'
echo $amigos[2][1]; //Busca la 2 posicion (0,1,2) y su primera posicion (1) '21'


?>