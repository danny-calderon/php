<?php
// Script para calcular el área

// Solicitar las medidas al usuario 
echo "Ingrese la base: ";
$base= trim(fgets(STDIN));

echo "Ingrese la altura: ";
$altura = trim(fgets(STDIN));

// Calcular el area
$area = ($altura * $base);

// Mostrar el promedio
echo "El área  es: " . number_format($area, 2) . "\n";

?>
