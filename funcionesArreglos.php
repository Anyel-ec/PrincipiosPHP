<?php

$meses = array(
    'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
    'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);
//contar los meses
echo count($meses);
//ordenar en order alfabetico los meses
echo count ($meses);
$numeros = array(
    1,3,2,4,5,6,8,9,10,7,11
);
$numeros1 = array(
    1,3,2,4,5,6,8,9,10,7,11
);
sort($numeros1); //ordena asc
$numeros2 = array(
    1,3,2,4,5,6,8,9,10,7,11
);
rsort($numeros2); //ordena desc
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meses del Año</title>
</head>
<body>
    <h1>Meses del Año</h1>
    <ul>
        <?php
        foreach($meses as $mes){ //Recorre el arreglo meses
            echo "<li>$mes.</li>";
        };
        echo "<h1>Numeros Desordenados</h1>";
        foreach($numeros as $num){
            echo "<li>$num.</li>";
            
        };
        echo "<h1>Numeros Ordenados Ascendentemente</h1>";
        
        foreach($numeros1 as $num){
            echo "<li>$num.</li>";  
        }
        echo "<h1>Numeros Ordenados Descendente</h1>";
        
        foreach($numeros2 as $num){
            echo "<li>$num.</li>";  
        }
        ?>
    </ul>

</body>
</html>