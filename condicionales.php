<?php
//Declaramos variable
$edad = 15; //Entero
$nombre = 'Angel'; //Texto
//Si edad es igual o mayor a 18  y el nombre es Angel se imprime un BIENVENIDO
if ($edad >=18 && $nombre == 'Angel'){ 
    echo "<h1>Bienvenido!! </h1>";
}
// Caso contrario si, edad es menor a 18 o su nombre es diferente a Angel imprime un 
//ERES MENOS DE EDAD
else if ($edad <18 or $nombre != 'Angel'){
    echo "<h1> Eres menor de edad :( </h1>";
}
//Declaramos una variable
$mes = 'Enero';
//Si mes es igual a Diciembre
if ($mes == 'Diciembre'){
    //Se visualiza un feliz navidad
echo 'Feliz Navidad';
//Caso contrario si mes es Enero
} else if ($mes == 'Enero'){
    //Se visualiza un Feliz Año Nuevo
    echo 'Feliz Año Nuevo';
    //Caso contrario si mes es Febrero 
} else if ($mes == 'Febrero'){
    //se visualiza Feliz Carnaval
    echo 'Feliz Carnaval';
//Caso contrario    
}else{
    //Se visualiza lo siguiente: 
    echo 'El mes ingresado no tiene celebracion';
}
?>