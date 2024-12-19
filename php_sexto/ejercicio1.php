<?php

//Datos meteorologicos de los distintos pueblos
$meteorologicalData = [
    [
        'station' => 'Catarroja',
        'temperature' => 15,
        'humidity' => 85,
        'atmosphericPressure' => 1024
    ],
    [
        'station' => 'Alzira',
        'temperature' => 35,
        'humidity' => 75,
        'atmosphericPressure' => 1000
    ],
    [
        'station' => 'Almussafes',
        'temperature' => 17,
        'humidity' => 95,
        'atmosphericPressure' => 950
    ],
    [
        'station' => 'Carlet',
        'temperature' => 31,
        'humidity' => 55,
        'atmosphericPressure' => 850
    ]
];
//fuera de rango 
function fixPressure($index, $data) {
    if ($index < 0 || $index >= count($data)) {
        echo "Índice fuera de rango.\n";
        return $data;
    }
    
    $stationData = $data[$index];
    if ($stationData['temperature'] < 30) {
        $correctedPressure = $stationData['atmosphericPressure'] / 0.85;
    } else {
        $correctedPressure = $stationData['atmosphericPressure'] / 0.75;
    }
    
    $data[$index]['atmosphericPressure'] = round($correctedPressure, 2);
    echo "Presión atmosférica corregida para la estación: {$stationData['station']}\n";
    return $data;
}

function show($data) {
    echo str_pad("Station", 15) . str_pad("Temp (°C)", 12) . str_pad("Humidity (%)", 15) . "Pressure (hPa)\n";
    echo str_repeat("-", 60) . "\n";
    foreach ($data as $index => $station) {
        echo str_pad("[$index] {$station['station']}", 15)
            . str_pad($station['temperature'], 12)
            . str_pad($station['humidity'], 15)
            . $station['atmosphericPressure'] . "\n";
    }
    echo "\n";
}

function averageTemperature($data) {
    $totalTemperature = 0;
    foreach ($data as $station) {
        $totalTemperature += $station['temperature'];
    }
    return round($totalTemperature / count($data), 2);
}

// Mostrar los datos iniciales
echo "Datos iniciales:\n";
show($meteorologicalData);

// Corregir la estación con índice 1 (Alzira)
$meteorologicalData = fixPressure(1, $meteorologicalData);

// Mostrar los datos tras la corrección
echo "\nDatos después de corregir la estación Alzira:\n";
show($meteorologicalData);

// Calcular y mostrar la temperatura media
$averageTemp = averageTemperature($meteorologicalData);
echo "La temperatura media de las estaciones es: $averageTemp °C\n";
?>
