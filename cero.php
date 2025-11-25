<?php
$ejemplo = [
    [1, 12, 4, 8, 0],
    [23, 48, 3, 7, 9, 6]
];

foreach ($ejemplo as $fila) {
    foreach ($fila as $valor) {
        echo $valor . " ";
    }
    echo "<br>";
}
?>
