<?php
if (isset($_GET["filas"]) && isset($_GET["columnas"])) {

    $filas = $_GET["filas"];
    $columnas = $_GET["columnas"];
    $array = [];

    for ($i = 0; $i < $filas; $i++) {
        for ($j = 0; $j < $columnas; $j++) {
            $array[$i][$j] = rand(1, 100);
        }
    }

    // Mostrar la tabla
    for ($i = 0; $i < $filas; $i++) {
        for ($j = 0; $j < $columnas; $j++) {
            echo $array[$i][$j] . " ";
        }
        echo "<br>";
    }
}
?>

<form method="get">
    Filas: <input type="number" name="filas" min="1" required>
    Columnas: <input type="number" name="columnas" min="1" required>
    <input type="submit" value="Generar">
</form>
