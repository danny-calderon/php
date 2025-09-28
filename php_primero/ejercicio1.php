<?php
// Pedir notas al usuario
echo "Introduce la primera nota: ";
$nota1 = floatval(trim(fgets(STDIN)));

echo "Introduce la segunda nota: ";
$nota2 = floatval(trim(fgets(STDIN)));

echo "Introduce la tercera nota: ";
$nota3 = floatval(trim(fgets(STDIN)));

echo "Introduce la cuarta nota: ";
$nota4 = floatval(trim(fgets(STDIN)));

// Calcular promedio
$promedio = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

// Mostrar resultado
echo "El promedio de las notas es: " . number_format($promedio, 2) . PHP_EOL;
?>
