<?php 

//declaramos variables
$precio_llamada= 0;

echo "ingresa la duración de la llamda en minutos:";
$minutos = trim( fgets( STDIN ) );

echo "Ingrese el día de la semana (1-7, donde 1 es Lunes y 7 es Domingo): ";
$dia = trim(fgets(STDIN));

echo "Escriba la hora del día (1 para mañana, 2 para tarde): ";
$hora = trim(fgets(STDIN));

if ( $minutos <= 5 ){

    $precio_llamada = $minutos * 1;

}elseif ( $minutos <= 8){

    $precio_llamada = (5 * 1.00) + (($minutos - 5) * 0.80);

}elseif ( $minutos <= 10 ){

    $precio_llamada =(5 * 1.00) + (3 * 0.80) + (($minutos - 8) * 0.70);
   
}else{

    $precio_llamada =(5 * 1.00) + (3 * 0.80) + (2 * 0.70) + (($minutos -10) * 0.50);

}

echo "El costo base de la llamada es: €" . number_format($precio_llamada, 2) . "\n";

// Calcular impuestos según el día y la hora
$impuesto = 0;
if ($dia == 7) {
    // Domingo, impuesto del 3 %
    $impuesto = $precio_llamada * 0.03;
} elseif ($hora == 1) {
    // Día hábil por la mañana, impuesto del 15 %
    $impuesto = $precio_llamada * 0.15;
} elseif ($hora == 2) {
    // Día hábil por la tarde, impuesto del 10 %
    $impuesto = $precio_llamada * 0.10;
}

// Mostrar el impuesto
echo "El impuesto aplicado es: €" . number_format($impuesto, 2) . "\n";

// Calcular el total a pagar
$total = $precio_llamada + $impuesto;

// Mostrar el total a pagar
echo "El total a pagar por la llamada es: €" . number_format($total, 2) . "\n";
?>