<?php
session_start();
require 'vendor/autoload.php'; 

use PhpOffice\PhpSpreadsheet\IOFactory;

$archivo = __DIR__ . '/faltas-de-material.xlsx';
$resultados = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num_proyecto = $_POST['numero_proyecto'] ?? '';

    if (empty($num_proyecto)) {
        $_SESSION['mensaje'] = "<div class='aviso error'>Debes ingresar un número de proyecto.</div>";
        header("Location: buscar.php");
        exit();
    }

    if (!file_exists($archivo)) {
        $_SESSION['mensaje'] = "<div class='aviso error'>No hay datos registrados aún.</div>";
        header("Location: buscar.php");
        exit();
    }

    $spreadsheet = IOFactory::load($archivo);
    $sheet = $spreadsheet->getActiveSheet();
    $found = false;
    $resultados .= "<h3>Resultados para el proyecto <strong>$num_proyecto</strong>:</h3>";

    foreach ($sheet->getRowIterator() as $row) {
        $cell = $sheet->getCell('A' . $row->getRowIndex());
        if ($cell->getValue() == $num_proyecto) {
            $referencia = $sheet->getCell('B' . $row->getRowIndex())->getValue();
            $cantidad = $sheet->getCell('C' . $row->getRowIndex())->getValue();
            $tipo = $sheet->getCell('D' . $row->getRowIndex())->getValue(); // ✅ Agregar lectura de la columna D

            $resultados .= "<p>Referencia: $referencia, Cantidad: $cantidad, Tipo: $tipo</p>"; // ✅ Mostrar tipo
            $found = true;
        }
    }

    if (!$found) {
        $_SESSION['mensaje'] = "<div class='aviso error'>No se encontraron resultados.</div>";
        header("Location: buscar.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Datos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Buscar Datos</h2>

    <form method="post">
        <label for="numero_proyecto">Número de Proyecto:</label>
        <input type="text" id="numero_proyecto" name="numero_proyecto" required>
        <button type="submit">Buscar</button>
    </form>

    <a href="index.php"><button>Volver</button></a>

    <?php
    if (!empty($resultados)) {
        echo "<div class='resultados'>$resultados</div>";
    }

    if (isset($_SESSION['mensaje'])) {
        echo "<div class='mensaje'>" . $_SESSION['mensaje'] . "</div>";
        unset($_SESSION['mensaje']);
    }
    ?>
</body>
</html>
