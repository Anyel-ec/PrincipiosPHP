<?php
function nombre(){
    echo 'Angel Patiño';
};
function saludo($nombre) {
    echo "Hola $nombre" . "<br>";
};
//saludo('Luis');
//saludo('Angel');

function sumar($numero1, $numero2){
    $resultado = $numero1 + $numero2;
    echo $resultado;
}
//sumar(10,20);
function sumarRetorno($numero1, $numero2){
    $resultado = $numero1 + $numero2;
    return $resultado;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangulo</title>
</head>
<body>
    <h1>Calcular el area del triangulo</h1>
    <?php
        //echo sumarRetorno(20, 45);
        function triangulo($base, $altura){
            $resultado = ($base * $altura)/2;
            return $resultado;
        }
        echo 'El area del triangulo es: '."<h4>". triangulo(20,2)."</h4>";
    ?>
</body>
</html>