<?php

$notas = [];

// Generamos 10 notas aleatorias y las agregamos al array
for ($i = 0; $i < 10 ; $i++) {
    $notas[] = rand(1, 10);
}

echo "Las notas son:\n";
print_r($notas);

// Ordenamos el array en orden ascendente (menor a mayor)
sort($notas);

// Eliminamos el valor más bajo (primer elemento) y el más alto (último elemento)
array_splice($notas, 0, 1); // Elimina el primer elemento
array_splice($notas, -1, 1); // Elimina el último elemento

echo "Resultado (sin el valor más bajo ni el más alto):\n";
print_r($notas);

?>
