<?php
for ($i = 1; $i <= 10; $i++) 
    {
        echo " <br> Tabla de multiplicar del $i:<br>";
    for ($j = 1; $j <= 10; $j++){
    $resultado = $j * $i;
    echo "$i x $j = $resultado<br>";
    }
}

?>