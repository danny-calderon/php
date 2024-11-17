<?php

echo "dime 5 numeros enteros:";
$numeros = [];
$suma = 0;
$resultado = 0;

for ($i = 0; $i < 5; $i++){

    echo "Número " . ($i + 1) . ": ";
    $numeros[] = trim(fgets(STDIN));
    $suma += $numeros[$i];
}

$resultado = $suma / 5 ;

echo "la media es:". $resultado;

?>