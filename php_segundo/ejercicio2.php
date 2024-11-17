<?php

// Declaramos variables
$precio_final = 0;

// Pedimos al usuario la cantidad de datos que vamos a requerir
echo "Dime el precio de las uvas por kg: ";
$precio = trim(fgets(STDIN));

echo "Dime el tipo de uvas A o B: ";
$tipo = trim(fgets(STDIN));

echo "Dime el tamaño de las uvas 1 o 2: ";
$tamanyo = trim(fgets(STDIN));

echo "Dime el peso en kilos de las uvas: ";
$peso = trim(fgets(STDIN));

// Preguntamos el tipo en mayúscula o minúscula
if ( $tipo == "a" || $tipo == "A" ) {

    // Ponemos las condiciones dependiendo si es tamaño 1 o 2
    if ($tamanyo == "1") {
        $precio_final = $precio + 0.20;
    } elseif ($tamanyo == "2") {
        $precio_final = $precio + 0.30;
    }

} elseif ($tipo == "b" || $tipo == "B") {

    // Ponemos las condiciones dependiendo si es tamaño 1 o 2
    if ($tamanyo == "1") {
        $precio_final = $precio - 0.30;
    } elseif ($tamanyo == "2") {
        $precio_final = $precio - 0.50;
    }
}

// Calcular el total por el peso en kilos
$total = $precio_final * $peso;

echo "El precio final total por las uvas es de €" . number_format($total, 2) . "\n";

?>
