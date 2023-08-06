<?php

function obtenerDiaSemana($numero_dia) {
    switch ($numero_dia) {
        case 1:
            return "Lunes";
        case 2:
            return "Martes";
        case 3:
            return "Miércoles";
        case 4:
            return "Jueves";
        case 5:
            return "Viernes";
        case 6:
            return "Sábado";
        case 7:
            return "Domingo";
        default:
            return "Número de día inválido";
    }
}

// Probamos la función con diferentes números
echo "El día correspondiente al número 1 es: " . obtenerDiaSemana(1) . "<br>";
echo "El día correspondiente al número 4 es: " . obtenerDiaSemana(4) . "<br>";
echo "El día correspondiente al número 7 es: " . obtenerDiaSemana(7) . "<br>";
echo "El día correspondiente al número 10 es: " . obtenerDiaSemana(10) . "<br>";
?>
