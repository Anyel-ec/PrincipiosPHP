<?php
// Función para validar si una cadena contiene solo números
function isValidNumber($number) {
// Inicia un bucle que recorre cada dígito de la cadena
    for ($i = 0; $i < strlen($number); $i++) {
        // Verifica si el carácter actual no es un número
        if (!is_numeric($number[$i])) {
            return false;  // Verifica si el carácter actual no es un número
        }
    }
    return true;
}
function calculateVerifierDigit($number) {
    $sum = 0;
    // Inicia un bucle que recorre los primeros 15 dígitos del número de tarjeta
    for ($i = 0; $i < 15; $i++) {
        // Obtiene el valor numérico del dígito en la posición actual
        $digit = intval($number[$i]);
        // Verifica si el índice actual es par
        if ($i % 2 === 0) {
            // Duplica el dígito actual
            $digit *= 2;
            // Verifica si el resultado de la duplicación es mayor que 9
            if ($digit > 9) {
                // Divide el dígito en 10 y suma el cociente con el residuo
                $digit = intval($digit / 10) + $digit % 10;
            }
        }
        // Agrega el dígito (modificado o no) a la suma total
        $sum += $digit;
    }

    // Añade 9 a la suma total y luego calcula el residuo de la suma total más 9 dividida por 10
    $returnValue = ($sum + 9) - (($sum + 9) % 10);
    // Retorna la diferencia entre el valor de retorno y la suma total
    return $returnValue - $sum;
}

// Función para determinar el tipo de tarjeta
function getCardType($number) {
    $firstDigit = intval($number[0]);
    if ($firstDigit === 4) { //Si es igual a 4 es Visa
        return 'Visa';
    } elseif ($firstDigit === 5) { //Si es igual a 5 es MasterCard
        return 'Mastercard';
    } elseif ($firstDigit === 6) {//Si es igual a 6 es Discover
        return 'Discover';
    } elseif ($firstDigit === 3) {//Si es igual a 3 es American Express
        return 'American Express';
    } else { // caso contrario  
        return 'Desconocida';
    }
}

// Obtiene el número de tarjeta desde los parámetros GET o establece una cadena vacía si no se proporciona
$numeroTarjeta = $_GET['numero'] ?? '';
$nombreTitular = $_GET['nombre'] ?? '';

// Verifica si el método de solicitud es GET y si el número de tarjeta es válido
if ($_SERVER['REQUEST_METHOD'] === 'GET' && strlen($numeroTarjeta) === 15 && isValidNumber($numeroTarjeta)) {
    // Calcula el dígito verificador y determina el tipo de tarjeta
    $verificador = calculateVerifierDigit($numeroTarjeta);
    $tipoTarjeta = getCardType($numeroTarjeta);
    // Carga el arrayAsociativo desde una posible sesión existente o crea un nuevo array vacío
    // Inicia o reanuda la sesión para poder trabajar con variables de sesión
    session_start();

    // Recupera el contenido del array asociativo almacenado en la sesión, o crea un array vacío si no existe
    $arrayAsociativo = $_SESSION['arrayAsociativo'] ?? array();

    // Verifica si la variable $nombreTitular no está vacía
    if (!empty($nombreTitular)) {
        // Agrega el nuevo nombre y número de tarjeta al arrayAsociativo
        $arrayAsociativo[$nombreTitular] = $numeroTarjeta . $verificador;
        // Actualiza la variable de sesión con el nuevo contenido del arrayAsociativo
        $_SESSION['arrayAsociativo'] = $arrayAsociativo; // Actualiza la sesión
    }

} else {
    // Si no se cumple alguna condición anterior, establece valores predeterminados
    $verificador = '';
    $tipoTarjeta = 'Desconocida';

    // Muestra una alerta si el número de tarjeta no es válido
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        echo '<script>alert("El número de tarjeta debe tener 15 dígitos válidos.");</script>';
    }
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de Tarjetas de Crédito</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h1>GENERADOR DE TARJETAS DE CRÉDITO</h1>
        </div>
        <!--Agregamos esta nueva columna para el nombre -->
        <div class="col-3 col-lg-3 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Nombre:</label> <br>
                <input id='nombre-titular' type='text' placeholder='Nombre del titular' 
                class='form-control' value='<?php echo $nombreTitular; ?>'>
            </div>
        </div>

        <div class="col-6 col-lg-6 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Número:</label> <br>
                <input id='numero-input' type='text' 
                placeholder='XXXX XXXX XXXX XXX' class='form-control' 
                value='<?php echo $numeroTarjeta; ?>'>
            </div>
        </div>
        
        <div class="col-3 col-lg-3 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Auto-verificador:</label> <br>
                <input id='verificador-input' type='text' placeholder='X' 
                class='form-control' value='<?php echo $verificador; ?>' disabled>
            </div>
        </div>
        <div class="col-12 align-items-center col-sm-12 col-md-12" style="text-align: center;">
            <button class="btn btn-primary mb-5" 
            onclick="location.href='?numero=' +
            document.getElementById('numero-input').value + '&nombre=' +
            document.getElementById('nombre-titular').value">Generar</button>
            <div class="form-group align-items-center" >
                <label id="tipo-tarjeta-label" class="align-items-center text-center" 
                style="background-color: aqua; padding: 50px;">
                    <strong>Tipo de Tarjeta: </strong><?php echo $tipoTarjeta; ?>
                </label>
            </div>
        </div>
        
        <div class="col-12 text-center align-items-center">
            <?php
            // Verifica si la variable $arrayAsociativo está definida y si es un array
            if (isset($arrayAsociativo) && is_array($arrayAsociativo)) {
                echo '<center>';
                echo '<h5>Datos del Array Asociativo:</h5>';
                echo '<table border="1">';
                echo '<tr><th>Nombre</th><th>Número de Tarjeta Completo</th></tr>';
                // Itera a través del array asociativo y muestra los datos en una tabla
                foreach ($arrayAsociativo as $nombre => $numeroTarjetaCompleto) {
                    echo '<tr>';
                    //La función htmlspecialchars() converte caracteres especiales en entidades HTML.
                    echo '<td>' . htmlspecialchars($nombre) . '</td>';
                    echo '<td>' . htmlspecialchars($numeroTarjetaCompleto) . '</td>';
                    echo '</tr>';
                }
                echo '</table>';
                echo '</center>';
            } else {
                echo '<p>No se han generado datos en el array asociativo.</p>';
            }
            ?>
           
        </div>
       
    </div>
</div>
</body>
</html>