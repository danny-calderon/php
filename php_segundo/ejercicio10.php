<?php

// Inicializamos variables
$total_horas = 0;

// Pedimos al usuario el sueldo por hora
echo "Ingrese el sueldo por hora: ";
$sueldo_por_hora = trim(fgets(STDIN));

// Recogemos las horas trabajadas por cada día de la semana
for ($dia = 1; $dia <= 6; $dia++) {
    echo "Ingrese las horas trabajadas el día $dia: ";
    $horas_dia = trim(fgets(STDIN));
    
    // Sumamos las horas del día al total
    $total_horas += $horas_dia;
}


$sueldo_total = $total_horas * $sueldo_por_hora;


echo "Total de horas trabajadas: $total_horas horas\n";
echo "Sueldo total a recibir: €" . number_format($sueldo_total, 2) . "\n";

?>
