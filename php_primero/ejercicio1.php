<?php
// Script para calcular el promedio de 4 exámenes desde la terminal

// Solicitar calificaciones al usuario
echo "Ingrese la calificación del examen 1: ";
$examen1 = trim(fgets(STDIN));

echo "Ingrese la calificación del examen 2: ";
$examen2 = trim(fgets(STDIN));

echo "Ingrese la calificación del examen 3: ";
$examen3 = trim(fgets(STDIN));

echo "Ingrese la calificación del examen 4: ";
$examen4 = trim(fgets(STDIN));

// Calcular el promedio
$promedio = ($examen1 + $examen2 + $examen3 + $examen4) / 4;

// Mostrar el promedio
echo "El promedio de las calificaciones es: " . number_format($promedio, 2) . "\n";

?>
