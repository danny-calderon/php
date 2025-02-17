<?php
function contarRepeticiones($array) {
    $resultado = [];

    if (empty($array)) {
        return $resultado; // Devuelve un array vacío si la entrada está vacía
    }

    $contador = 1;
    $valorActual = $array[0];

    for ($i = 1; $i < count($array); $i++) {
        if ($array[$i] == $valorActual) {
            $contador++;
        } else {
            $resultado[$valorActual] = $contador;
            $valorActual = $array[$i];
            $contador = 1;
        }
    }

    // Agregar la última cuenta al resultado
    $resultado[$valorActual] = $contador;

    return $resultado;
}

// Ejemplo de uso
$numeros = [1, 1, 1, 2, 2, 3, 4, 5, 5, 5, 5];
$resultado = contarRepeticiones($numeros);

// Mostrar el resultado
foreach ($resultado as $numero => $cantidad) {
    echo "Número $numero aparece $cantidad veces<br>";
}
?>