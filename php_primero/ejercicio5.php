<?php
// Script para calcular el área de una figura

// Solicitar las medidas
echo "Ingrese el valor de R : ";
$R = trim(fgets(STDIN)); 

echo "Ingrese el valor de H : ";
$H = trim(fgets(STDIN)); 

// Calcular el área del triangulo 

//base del triangulo 
$baseTriangulo =  $R * 2; 

//altura del triangulo, usamos la hipotrenusa por que, por qu no tenemos la altura del triangulo, 
$hipotenusa = sqrt(pow($R, 2) + pow($H, 2));

$areaTriangulo = ($baseTriangulo * $hipotenusa) /2;

//ahora sacamos el area de el medio circulo 

// Declarar PI correctamente
define("PI", 3.1416);

// Calcular el área
$areaCircunferencia = (PI * pow($R, 2)) / 2 ;

$area = $areaCircunferencia + $areaTriangulo;
// Mostrar el área
echo "El área es: " . number_format($area, 2) . "\n";
?>
