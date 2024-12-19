<?php
function calculaSalario($horas, $tarifa = 10) {
    if ($horas > 40) {
        $salario = (40 * $tarifa) + (($horas - 40) * $tarifa * 1.25);
    } else {
        $salario = $horas * $tarifa;
    }
    return $salario;
}

$empleados = [
    'Juan' => [
        'horas' => 40,
        'tarifa' => 15
    ],
    'Perico' => [
        'horas' => 20,
        'tarifa' => 25
    ],
    'Andrés' => [
        'horas' => 45
    ],
];

foreach ($empleados as $nombre => $datos) {
    $horas = $datos['horas'];
    $tarifa = $datos['tarifa'] ?? 10; 
    $salario = calculaSalario($horas, $tarifa);
    echo "$nombre: €" . number_format($salario, 2) . "\n";
}
?>
