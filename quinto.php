<?php

// Comprobamos si llega el tamaño por GET
if (!isset($_GET['size'])) {
    echo "Falta el parámetro 'size' por GET.";
    exit;
}

$size = intval($_GET['size']);

if ($size <= 0) {
    echo "El tamaño debe ser un número positivo.";
    exit;
}

// Creamos la matriz identidad
$matriz = [];

for ($i = 0; $i < $size; $i++) {
    for ($j = 0; $j < $size; $j++) {
        $matriz[$i][$j] = ($i === $j) ? 1 : 0;
    }
}

// Mostramos la matriz
echo "<pre>";
foreach ($matriz as $fila) {
    echo "[ " . implode(", ", $fila) . " ]\n";
}
echo "</pre>";

?>
