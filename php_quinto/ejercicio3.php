<?php
function dameNumero() {
    return rand(1, 49);
}

function generarCombinacion() {
    $combinacion = [];

    while (count($combinacion) < 6) {
        $numero = dameNumero();
        if (!in_array($numero, $combinacion)) {
            $combinacion[] = $numero;
        }
    }

    sort($combinacion);

    return $combinacion;
}

$combinacion = generarCombinacion();
echo "Tu combinación de lotería primitiva es: " . implode(", ", $combinacion) . "\n";
?>