<?php

$num = [1,2,3,4,5,6,7,8,9];

// Array bidimensional: fila 0 = pares, fila 1 = impares
$resultado = [
    0 => [],  // pares
    1 => []   // impares
];

foreach ($num as $n) {
    if ($n % 2 === 0) {
        $resultado[0][] = $n;   // par
    } else {
        $resultado[1][] = $n;   // impar
    }
}

// Mostrar resultado bonito
echo "<pre>";
print_r($resultado);
echo "</pre>";

?>
