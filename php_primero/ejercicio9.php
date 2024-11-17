<?php
// Definir la 
define("METROS_A_PULGADAS", 1 / 0.0254);

// pedir la cantidad de tela en metros
echo "Ingrese la cantidad de tela en metros: ";
$metros = trim(fgets(STDIN));

// Convertir 
$pulgadas = $metros * METROS_A_PULGADAS;

echo "La cantidad de tela que se debe pedir es: " . number_format($pulgadas, 2) . " pulgadas\n";
?>
