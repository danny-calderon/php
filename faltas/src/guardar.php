<?php
session_start();
require 'vendor/autoload.php'; 

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //ruta del archivo 
    $archivo = __DIR__ . '/faltas-de-material.xlsx';
    $num_proyecto = $_POST['numero_proyecto'] ?? '';
    $referencia = $_POST['referencia'] ?? '';
    $cantidad = $_POST['cantidad'] ?? '';
    $tipo = $_POST['tipo'] ?? '';

    if (empty($num_proyecto) || empty($referencia) || empty($cantidad) || empty($tipo)) {
        $_SESSION['mensaje'] = "<div class='aviso error'>Todos los campos son obligatorios.</div>";
        header("Location: guardar.php");
        exit();
    }

    if (file_exists($archivo)) {
        $spreadsheet = IOFactory::load($archivo);
        $sheet = $spreadsheet->getActiveSheet();
    } else {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'Número de Proyecto');
        $sheet->setCellValue('B1', 'Referencia');
        $sheet->setCellValue('C1', 'Cantidad');
        $sheet->setCellValue('D1', 'Tipo'); // Nueva columna "Tipo"
    }

    $fila = $sheet->getHighestRow() + 1;
    $sheet->setCellValue("A$fila", $num_proyecto);
    $sheet->setCellValue("B$fila", $referencia);
    $sheet->setCellValue("C$fila", $cantidad);
    $sheet->setCellValue("D$fila", $tipo); // Guarda el tipo seleccionado

    $writer = new Xlsx($spreadsheet);
    $writer->save($archivo);

    $_SESSION['mensaje'] = "<div class='aviso exito'>Datos guardados correctamente.</div>";
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar Datos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Guardar Datos</h2>

    <!-- Formulario de entrada de datos -->
    <form method="post">
        <label for="numero_proyecto">Número de Proyecto:</label>
        <input type="text" id="numero_proyecto" name="numero_proyecto" required>

        <label for="referencia">Referencia:</label>
        <input type="text" id="referencia" name="referencia" required>

        <label for="cantidad">Cantidad:</label>
        <input type="number" id="cantidad" name="cantidad" required>

        <label for="tipo">Tipo:</label>
        <select id="tipo" name="tipo" required>
            <option value="placa">Placa</option>
            <option value="puerta">Puerta</option>
            <option value="envolvente">Envolvente</option>
        </select>

        <button type="submit">Guardar</button>
    </form>

    <!-- Botón para volver -->
    <a href="index.php"><button>Volver</button></a>
</body>
</html>
