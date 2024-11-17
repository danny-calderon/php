<?php

$meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
$fechas = [];

for ($i = 1; $i <= 10; $i++) {
    $mes = random_int(1, 12);
    $nombreMes = $meses[$mes - 1];
    $diaMaximo = cal_days_in_month(CAL_GREGORIAN, $mes, 2018);
    $dia = random_int(1, $diaMaximo);
    $fecha = "$dia de $nombreMes de 2018";
    $fechas[] = "Fecha $i: $fecha";
}

echo implode("\n", $fechas) . "\n";

?>
