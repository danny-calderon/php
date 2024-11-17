<?php
// Script para calcular el área de una circunferencia

// Solicitar las medidas
echo "Ingrese el radio: ";
$radio = trim(fgets(STDIN)); // Usamos $radio en lugar de $base

// Declarar PI correctamente
define("PI", 3.1416);

// Calcular el área
$area = PI * pow($radio, 2);

// Mostrar el área
echo "El área es: " . number_format($area, 2) . "\n";
?>
