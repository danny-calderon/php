<?php

$letras = "TRWAGMYFPDXBNJZSQVHLCKE";
echo "Introduce el número de DNI: ";
$dni_numero = trim(fgets(STDIN));

if (is_numeric($dni_numero) && $dni_numero >= 0) {
    $indice = $dni_numero % 23;
    $letra = $letras[$indice];
    echo "La letra correspondiente al DNI $dni_numero es: $letra\n";
} else {
    echo "Por favor, introduce un número de DNI válido.\n";
}

?>
