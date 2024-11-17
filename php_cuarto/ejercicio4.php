<?php 

// Hacemos un array
$array = [1, 2, 3, 4, 5, 3, 2, 6, 7, 8, 2, 8];
$tamanio = count($array);

// Creamos un array bidimencional
$bidimencional = [
    [], // fila 0 
    []  // fila 1
];

// Recorremos el array
for ($i = 0; $i < $tamanio; $i++) {
    if ($array[$i] % 2 == 0) { // Si el número es par
        $bidimencional[0][] = $array[$i];
    } else { // Si el número es impar
        $bidimencional[1] [] = $array[$i];
    }
}

// Mostramos los números pares
echo "Los números pares y impares son:\n";
print_r($bidimencional);

?>
