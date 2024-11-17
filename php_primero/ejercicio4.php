<?php
// Script para calcular el área de una figura compuesta por un triángulo y un rectángulo

// Solicitar medidas
echo "Ingrese la medida de A (altura del triángulo): ";
$A= trim(fgets(STDIN));

echo "Ingrese la medida de B (base común del triángulo y del rectángulo): ";
$B = trim(fgets(STDIN));

echo "Ingrese la medida de C (altura del rectángulo): ";
$C= trim(fgets(STDIN));

/* Calcular el área del triángulo, para ello lo que hago es restar la altura de C a A y el resultado es la altura del triangulo
y e ahi saco la base que seria B y hago la opereacón, para la altura del anteriro creo una nueva variable */

$X = $A - $C;

$areaTriangulo = ($B * $X) / 2;

// Calcular el área del rectángulo
$areaRectangulo = $B * $C;

// Calcular el área total
$areaTotal = $areaTriangulo + $areaRectangulo;

// Mostrar el resultado
echo "El área total de la figura es: " . number_format($areaTotal, 2) . "\n";

?>
