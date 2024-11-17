<?php
// Definir la constante de conversión de litros a galones
define("LITROS_POR_GALON", 3.785);

// Definir el precio por galón
define("PRECIO_POR_GALON", 2.0);

// Solicitar la cantidad de litros producidos en el día
echo "Ingrese la cantidad de litros producidos en un día: ";
$litros = trim(fgets(STDIN));

// Convertir litros a galones
$galones = $litros / LITROS_POR_GALON;

// Calcular el pago total
$pagoTotal = $galones * PRECIO_POR_GALON;

// Mostrar el resultado
echo "El productor recibirá: €" . number_format($pagoTotal, 2) . "\n";
?>
