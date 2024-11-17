<?php

echo "Ingrese la cantidad de metro cubicos consumidos: ";
$metrosCubicosConsumidos= trim(fgets(STDIN));

echo "Ingrese el precio por metro cubico comsumido: ";
$precioMetroCubico = trim(fgets(STDIN));

// Calcular el total
$Total = ($metrosCubicosConsumidos * $precioMetroCubico);

// Mostrar el promedio
echo "El área  es: " . number_format($Total, 2) . "€\n";

?>
