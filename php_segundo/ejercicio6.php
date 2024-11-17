<?php 

// Inicializamos variables
$ahorro_total = 0;
$ahorro_mensual = 0;

for ($mes = 1 ; $mes <= 12; $mes ++){

    echo "dime cuanto quieres ingresar para el mes $mes. \n";
    $deposito = trim(fgets(STDIN));

    //esto yo lo llamo un contador
    $ahorro_total += $deposito;

    // Mostramos cuánto se ha ahorrado hasta el mes actual
    echo "Ahorro hasta el mes $mes: €" . number_format($ahorro_total, 2) . "\n";

}

echo "El ahorro total al final del año es: €" . number_format($ahorro_total, 2) . "\n";

?>