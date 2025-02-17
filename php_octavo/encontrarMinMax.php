<?php
function encontrarMinMax($array) {
    if (empty($array)) {
        return ["min" => null, "max" => null]; // Manejo de array vacío
    }

    $min = $array[0];
    $max = $array[0];

    foreach ($array as $valor) {
        if ($valor < $min) {
            $min = $valor;
        }
        if ($valor > $max) {
            $max = $valor;
        }
    }

    return ["min" => $min, "max" => $max];
}

// Ejemplo de uso
$numeros = [10, 3, 25, 7, -2, 15, 0];
$resultado = encontrarMinMax($numeros);

echo "Mínimo: " . $resultado["min"] . "<br>";
echo "Máximo: " . $resultado["max"] . "<br>";
?>