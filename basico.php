<?php
//Tipo de Dato Entero
$edad = 25;
echo "$edad <br>";
//Tipo de Dato Decimal
$precio = 12.99;
echo $precio."<br>";
//Tipo de Dato String
$nombre = "Juan, ";
$mensaje = 'Hola, ¿cómo estás?';
echo $nombre.$mensaje;
//Tipo de dato booleano
$es_mayor_de_edad = true;
$activo = false;
//Arreglos - Array
$frutas = array('manzana', 'naranja', 'plátano'); 
$numeros = [1, 2, 3, 4, 5];
//Clase
class Persona {
    public $nombre;
    public $edad;
}
//Objetos
$persona = new Persona();
$persona->nombre = "María";
$persona->edad = 30;
//Variable nula
$variable_nula = null;

?>