<?php

$tiradas = 5;
$resultados = [];
$victoriasJugador1 = 0;
$victoriasJugador2 = 0;
$empates = 0;

for ($i = 0; $i < $tiradas; $i++) {
    $dadoJugador1 = random_int(1, 6);
    $dadoJugador2 = random_int(1, 6);

    if ($dadoJugador1 > $dadoJugador2) {
        $resultados[] = "Jugador 1";
        $victoriasJugador1++;
    } elseif ($dadoJugador2 > $dadoJugador1) {
        $resultados[] = "Jugador 2";
        $victoriasJugador2++;
    } else {
        $resultados[] = "Empate";
        $empates++;
    }
}

// Calcular porcentajes
$porcentajeJugador1 = ($victoriasJugador1 / $tiradas) * 100;
$porcentajeJugador2 = ($victoriasJugador2 / $tiradas) * 100;
$porcentajeEmpates = ($empates / $tiradas) * 100;

echo "Resultados de cada tirada:\n";
foreach ($resultados as $indice => $resultado) {
    echo "Tirada " . ($indice + 1) . ": $resultado\n";
}

echo "\nPorcentajes:\n";
echo "Jugador 1 ganó: $porcentajeJugador1%\n";
echo "Jugador 2 ganó: $porcentajeJugador2%\n";
echo "Empates: $porcentajeEmpates%\n";

?>
