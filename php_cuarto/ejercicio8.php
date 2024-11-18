<?php
// Array bidimensional original
$array = [
    [ 1, 5, 8, 5],
    [ 7, 3, 2, 4],
    [ 1, 6, 2, 4]
];

echo "mostramos el array original:\n";
print_r($array);

// Transponer el array
$transpuesto = [];

foreach ($array as $fila => $valores) {
    foreach ($valores as $columna => $valor) {
        $transpuesto[$columna][$fila] = $valor;
    }
}

echo "mostramos el array transpuesto:\n";
print_r($transpuesto);
?>
