<?php
# Ejercicio de ciclo while - Secuencia Fibonacci

$terminos = 20;

$primer_termino = 0;
$segundo_termino = 1;

echo "Secuencia Fibonacci de los primeros $terminos términos:<br>";

echo "$primer_termino, $segundo_termino";

$contador = 2;
while ($contador < $terminos) {
    $siguiente_termino = $primer_termino + $segundo_termino;
    echo ", $siguiente_termino";
    $primer_termino = $segundo_termino;
    $segundo_termino = $siguiente_termino;

    $contador++;
}

echo "<br>La secuencia Fibonacci con $terminos términos ha sido generada.";
?>

