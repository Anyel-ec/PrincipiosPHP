<?php
//Arreglos asociativos, clave = valor
$angel = array ('telefono'=>'0939470232', 'edad' =>22, 'apellido'>= 'Patiño', 'pais' >='Ecuador');

echo $angel['telefono'].'<br>';  //Telefono es la clave, y mostraria el valor  
echo $angel['edad']; //De igual forma, al anterior
foreach($angel as $caracteristicas => $valor){ //Recorrer todo el arreglo. 
    echo "Su ".$caracteristicas . " es " .$valor . '<br>';
}

?>