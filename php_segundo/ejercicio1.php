<?php

//hacemos una variable la cual va ser el resultado y la ponemos a cero, eso cambiara segun la opion qeu eescoja
$resultado = 0;

//le preguntamos al usuario que opcion quiere escoger
echo "Ingrese la cantidad de personas que son? : ";
$personas = trim(fgets(STDIN));

if ( $personas <= 200 ){
   
    echo "el plato or persona es de 95,00$ \n";
    $resultado = $personas * 95;
    echo "el total que tienes que pagar es: $resultado \n";

//&& esto significa y osea se tiene que complir una condición y la otra
}elseif( $personas > 200 && $personas <= 300) {

    echo "el plato or persona es de 85,00$ \n";
    $resultado = $personas * 85;
    echo "el total que tienes que pagar es: $resultado\n";
}elseif( $personas > 300 ){

    echo "el plato or persona es de 75,00$ \n";
    $resultado = $personas * 75;
    echo "el total que tienes que pagar es: $resultado \n";
}
echo "Gracias por venir!!";

?>