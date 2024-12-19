<?php 

function numRomano($numero) {
    //definimos los numeros romanos
    $romanos = [
        1 => "I",
        2 => "II",
        3 => "III",
        4 => "IV",
        5 => "V",
        6 => "VI",
        7 => "VII",
        8 => "VIII",
        9 => "IX",
        10 => "X"
    ];

    //comprobamos si el numero que nos dan esta en el rango 
    if ($numero >= 1 && $numero <= 10) {
        return $romanos[$numero];
    } else {
        return "Número fuera de rango (debe estar entre 1 y 10)";
    }
}

$numero = readline("Introduce un número entre 1 y 10: ");

echo "El número $numero en formato romano es: " . numRomano($numero) . "\n";
?>