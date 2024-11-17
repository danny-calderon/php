<?php 

// Creamos el array 
$array = [1, 2, 3, 4, 5, 3, 2, 6, 7, 8, 2, 8, 8, 1];

// Inicializamos el array de repeticiones
$repeticiones = [];

// Contamos el tamaño del array
$tamanio = count($array);

// Bucle para contar repeticiones
for ($i = 0; $i < $tamanio; $i++) {
    $contador = 0;

    // Comparamos el elemento actual con todos los demás
    for ($j = 0; $j < $tamanio; $j++) {
        if ($array[$i] == $array[$j]) {
            $contador++;
        }
    }

    // Solo agregamos al array de repeticiones si no está ya registrado
    if (!array_key_exists($array[$i], $repeticiones)) {
        $repeticiones[$array[$i]] = $contador;
    }
}

// Mostramos las repeticiones
echo "Repeticiones de cada valor:\n";
foreach ($repeticiones as $numero => $cantidad) {
    echo "El número $numero aparece $cantidad veces.\n";
}

?>
