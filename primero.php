<?php
$numeros = [
    [1, 2, 3, 4],
    [5, 6, 7, 8]
];

for ($i = 0; $i < count($numeros); $i++) {
    $suma = 0;

    for ($j = 0; $j < count($numeros[$i]); $j++) {
        $suma += $numeros[$i][$j];
    }

    echo "Fila " . ($i + 1) . ": $suma<br>";
}
?>
