<?php
//Establecer nombre del archivo
$fichero = "datos.txt";
//Leer el contenido del fichero   
$contenido = file($fichero);
//Dividir en subcadenas los datos en la primera fila
list($mes1, $mes2, $mes3, $mes4, $num1, $num2, $num3, $num4) = explode('-', $contenido[0]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td><?php echo $mes1 ?></td>
            <td><?php echo $mes2 ?></td>
            <td><?php echo $mes3 ?></td>
            <td><?php echo $mes4 ?></td>
        </tr>
        <tr>
            <td><?php echo $num1 ?></td>
            <td><?php echo $num2 ?></td>
            <td><?php echo $num3 ?></td>
            <td><?php echo $num4 ?></td>
        </tr>
    </table>
</body>
</html>
