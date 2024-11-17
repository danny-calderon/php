<?php

// Preguntamos el tipo de autobús
echo "Ingrese el tipo de autobús (A, B, o C): ";
$tipo_autobus = trim(fgets(STDIN));

// Preguntamos la cantidad de personas
echo "Ingrese la cantidad de personas: ";
$personas = trim(fgets(STDIN));

// Preguntamos la cantidad de kilómetros a recorrer
echo "Ingrese la cantidad de kilómetros a recorrer: ";
$kilometros = trim(fgets(STDIN));

// Inicializamos el precio por kilómetro por persona
$km = 0;

// Determinamos el precio por kilómetro según el tipo de autobús
if ($tipo_autobus == 'A' || $tipo_autobus == 'a') {
    $km = 2.0;
} elseif ($tipo_autobus == 'B' || $tipo_autobus == 'b') {
    $km = 2.5;
} elseif ($tipo_autobus == 'C' || $tipo_autobus == 'c') {
    $km = 3.0;
} else {
    echo "Error.\n";
    exit;
}

// Si hay menos de 20 personas, se cobra como si fueran 20 personas
if ($personas < 20) {
    $personas = 20;
}

// Calculamos el coste total del viaje
$costo_total = $personas * $km * $kilometros;

// Calculamos el coste por persona
$costo_por_persona = $costo_total / $personas;

// Mostramos los resultados
echo "El coste total del viaje es: €" . number_format($costo_total, 2) . "\n";
echo "El coste por persona es: €" . number_format($costo_por_persona, 2) . "\n";

?>
