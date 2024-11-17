<?php 

// Inicializamos variables
$menores_o_iguales_cero = 0;
$mayores_cero = 0;

echo "Dime la cantidad de numeros que quieres ingresar \n";
$cantidad = trim(fgets(STDIN));

for ( $i = 1 ; $i <= $cantidad ; $i++){

    echo "dime un numero:  \n";
    $numero = trim(fgets(STDIN));

    if ( $numero <= 0) {

        $menores_o_iguales_cero ++;
    }else{
        $mayores_cero ++;
    }

}

echo "Cantidad de números menores o iguales a 0: $menores_o_iguales_cero\n";
echo "Cantidad de números mayores a 0: $mayores_cero\n";
?>