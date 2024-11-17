<?php

$array1 = array(rand(1, 10), rand(1, max: 10), rand(1, 10), rand(1, 10), rand(1, 10));
$array2 = array(rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10));

if (count($array1) == count($array2)) {
    echo "Los productos de los elementos en la misma posición son:\n";
    
    for ($i = 0; $i < count($array1); $i++) {
        $producto = $array1[$i] * $array2[$i];
        echo "Producto en posición $i: $producto\n";
    }
} else {
    echo "Los arrays no tienen la misma longitud, no se puede realizar el cálculo.\n";
}

?>
