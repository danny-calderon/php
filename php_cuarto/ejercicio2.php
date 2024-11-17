<?php
$array = [1, 2, 3, 4, 5, 3, 2, 6, 7, 8, 2, 8];

echo "Array original:\n";
foreach ($array as $valor) {
    echo $valor . " ";
}
echo "\n";

$duplicados = [];
$tamanio = count($array);

for ($i = 0; $i < $tamanio; $i++) { 
    $contador = 0; // Contador para el número de ocurrencias
    for ($j = 0; $j < $tamanio; $j++) {
        if ($array[$i] === $array[$j]) {
            $contador++;
        }
    }
    // Si se encuentra más de una ocurrencia y no está ya en $duplicados
    $ya_en_duplicados = false;
    foreach ($duplicados as $dup) {
        if ($dup === $array[$i]) {
            $ya_en_duplicados = true;
            break;
        }
    }
    if ($contador > 1 && !$ya_en_duplicados) {
        $duplicados[] = $array[$i];
    }
}

echo "Elementos duplicados:\n";
if (empty($duplicados)) {
    echo "No hay duplicados\n";
} else {
    foreach ($duplicados as $valor) {
        echo $valor . " ";
    }
}
?>
