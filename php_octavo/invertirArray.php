<?php
function invertirArray($array) {
    $invertido = [];
    $longitud = count($array);

    for ($i = 0; $i < $longitud; $i++) {
        $invertido[$i] = $array[$longitud - 1 - $i];
    }

    return $invertido;
}

// Ejemplo de uso
$numeros = [1, 2, 3, 4, 5];
$resultado = invertirArray($numeros);

// Mostrar el resultado
echo "Array original: " . implode(", ", $numeros) . "<br>";
echo "Array invertido: " . implode(", ", $resultado) . "<br>";
?>