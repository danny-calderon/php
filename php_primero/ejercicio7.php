<?php
// Script para calcular la distancia de un sitio a otro

// Solicitar calificaciones al usuario
echo "Ingrese cordenada x1 del primer punto: ";
$x1 = trim(fgets(STDIN));

echo "Ingrese cordenada y1 del primer punto: ";
$y1 = trim(fgets(STDIN));

echo "Ingrese cordenada x2 del segundo punto: ";
$x2 = trim(fgets(STDIN));

echo "Ingrese cordenada y2 del segundo punto: ";
$y2 = trim(fgets(STDIN));

// Calcular el promedio
$distancia = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));

// Mostrar el promedio
echo "El promedio de las calificaciones es: " . number_format($distancia, 2) . "\n";

?>
