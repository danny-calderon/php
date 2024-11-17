<?php


// Inicializamos variables
$resultado = 0;
$precio_bus = 0;

// Preguntamos al usuario la cantidad de personas
echo "Ingrese la cantidad de personas que son: ";
$personas = trim(fgets(STDIN));

// Esto es el cálculo del coste por alumno
if ($personas >= 100) {
    $resultado = $personas * 65;

    echo "El coste general es de: €" . number_format($resultado, 2) . "\n";
    echo "El coste por alumno es: €" . number_format($resultado / $personas, 2) . "\n";

} elseif ($personas >= 50 && $personas <= 99) {
    $resultado = $personas * 70;

    echo "El coste general es de: €" . number_format($resultado, 2) . "\n";
    echo "El coste por alumno es: €" . number_format($resultado / $personas, 2) . "\n";

} elseif ($personas >= 30 && $personas <= 49) {
    $resultado = $personas * 95;

    echo "El coste general es de: €" . number_format($resultado, 2) . "\n";
    echo "El coste por alumno es: €" . number_format($resultado / $personas, 2) . "\n";

} else {
    // Si hay menos de 30 alumnos, el coste fijo del autobús es €4000
    $precio_bus = 4000;
    $resultado = $precio_bus / $personas;
    echo "El coste total por el autobús es de: €4000 y el coste por alumno es: €" . number_format($resultado, 2) . "\n";
}
// Mostramos el coste por alumno si hay menos de 30 o el coste total
if ($personas < 30) {
    echo "El coste total por el autobús es €4000 y el coste por alumno es: €" . number_format($resultado, 2) . "\n";
} 

?>
