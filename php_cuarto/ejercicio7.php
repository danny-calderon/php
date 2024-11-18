<?php 

//array original 
$array = [2, 5, 7, 0, 4, 0, 7, -5, 8, 0];

//mostrar el array original
echo "Array original: " . implode(", ", $array) . "\n";

//creamos dos arrays uno para guardar los 0 y otro para guardar el resto de numeros
$ceros = [];
$sinceros = [];

    //recorremos el array y creamos la variable valor, la cual se gurda un elemento del array el del cual esta recorriendo 
    foreach( $array as $valor ){

        // si valor es  = a 0 la metemos en el array de ceros
        if( $valor === 0){

            $ceros[] = $valor;

        }else{

            $sinceros[] = $valor; 
        }
    }

    //combinamos los arrays de ceros y sinceros
    $resultado = array_merge($sinceros,$ceros);

    // Mostrar el array resultante
    echo "Array con ceros al final: " . implode(", ", $resultado) . "\n";
?>