<?php

$matriz = [
    [1,5,8,5],
    [7,3,2,4],
    [1,6,2,4]
];

// Comprobamos dimensiones
$filas = count($matriz);
$columnas = count($matriz[0]);

// Matriz transpuesta
$transpuesta = [];

for ($c = 0; $c < $columnas; $c++) {
    for ($f = 0; $f < $filas; $f++) {
        $transpuesta[$c][$f] = $matriz[$f][$c];
    }
}

// Mostrar resultado
echo "<pre>";
foreach ($transpuesta as $fila) {
    echo "[ " . implode(", ", $fila) . " ]\n";
}
echo "</pre>";

?>
