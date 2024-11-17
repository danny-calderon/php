<?php 

// Hacemos un array
$array = [1, 2, 3, 4, 5, 3, 2, 6, 7, 8, 2, 8];
$tamanio = count($array);

// Creamos dos arrays: uno para pares y otro para impares
$par = [];
$impar = [];

// Recorremos el array
for ($i = 0; $i < $tamanio; $i++) {
    if ($array[$i] % 2 == 0) { // Si el número es par
        $par[] = $array[$i];
    } else { // Si el número es impar
        $impar[] = $array[$i];
    }
}

// Mostramos los números pares
echo "Los números pares son:\n";
print_r($par);

// Mostramos los números impares
echo "Los números impares son:\n";
print_r($impar);

?>
