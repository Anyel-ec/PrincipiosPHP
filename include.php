<?php
//Creamos una funcion, que se utulizara en el archivo vista 
function suma($num1, $num2){
    return ($num1 + $num2);
}

include 'vista.php';  //nos ayuda a llamar este archivo
require 'vista.php'; //Funciona igual al include, si no existe marcara un FATAL ERROR,
//y no mostrara el codigo que se encuentre por debajo del requiere VITAL USARLO EN CONEXIONES DE BD
?>