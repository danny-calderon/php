<?php
// Solicitar las horas trabajadas en la semana
echo "Ingrese las horas trabajadas en la semana: ";
$horasTrabajadas = trim(fgets(STDIN));

// Solicitar el pago por hora
echo "Ingrese el pago por hora: ";
$pagoPorHora = trim(fgets(STDIN));

// Calcular el sueldo semanal
$sueldoSemanal = $horasTrabajadas * $pagoPorHora;

// Mostrar el sueldo semanal
echo "El sueldo semanal es: " . number_format($sueldoSemanal, 2) . "€\n";
?>
