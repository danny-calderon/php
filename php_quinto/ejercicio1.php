<?php 
function diferenciaEdad($edad1, $edad2) {
    // Calcular y retornar la diferencia de edad en valor absoluto
    return abs($edad1 - $edad2);
}

// pedir las edades de los dos hermanos
$edadHermano1 = readline("¿Cuál es la edad del primer hermano? ");
$edadHermano2 = readline("¿Cuál es la edad del segundo hermano? ");

// Calcular la diferencia de edad, es la restad e la funcion
$diferencia = diferenciaEdad($edadHermano1, $edadHermano2);

// Mostrar el resultado
echo "La diferencia de edad entre los dos hermanos es de $diferencia años.\n";
?>
