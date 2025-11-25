<?php
// Comprobar que vienen filas y columnas por GET
if (!isset($_GET['filas']) || !isset($_GET['columnas'])) {
    die("Faltan parámetros GET. Pásame 'filas' y 'columnas', campeón.");
}

$filas = intval($_GET['filas']);
$columnas = intval($_GET['columnas']);

// Comprobar que las dimensiones tienen sentido
if ($filas < 1 || $columnas < 1) {
    die("Dimensiones inválidas. Necesito al menos 1 fila y 1 columna.");
}

// Crear array bidimensional con valores aleatorios
$matriz = [];
for ($i = 0; $i < $filas; $i++) {
    for ($j = 0; $j < $columnas; $j++) {
        $matriz[$i][$j] = rand(1, 5);
    }
}

// Mostrar matriz (opcional, pero útil para ver qué estás sumando)
echo "<h3>Matriz generada:</h3>";
echo "<pre>";
print_r($matriz);
echo "</pre>";

// Sumar columnas
$sumasColumnas = array_fill(0, $columnas, 0);

for ($i = 0; $i < $filas; $i++) {
    for ($j = 0; $j < $columnas; $j++) {
        $sumasColumnas[$j] += $matriz[$i][$j];
    }
}

// Mostrar resultados
echo "<h3>Suma de columnas:</h3>";
for ($j = 0; $j < $columnas; $j++) {
    echo "Columna " . ($j + 1) . ": " . $sumasColumnas[$j] . "<br>";
}
?>
