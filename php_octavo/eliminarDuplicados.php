<?php
function eliminarDuplicados($array) {
    $unicos = [];
    $longitud = count($array);

    for ($i = 0; $i < $longitud; $i++) {
        if ($i == 0 || $array[$i] != $array[$i - 1]) {
            $unicos[] = $array[$i];
        }
    }

    // Usamos array_values para reindexar
    array_splice($unicos, count($unicos));

    return $unicos;
}

// Ejemplo de uso
$numeros = [1, 1, 2, 2, 3, 4, 4, 5, 5, 5];
$resultado = eliminarDuplicados($numeros);

// Mostrar resultado
echo "Array original: " . implode(", ", $numeros) . "<br>";
echo "Array sin duplicados: " . implode(", ", $resultado) . "<br>";
?>