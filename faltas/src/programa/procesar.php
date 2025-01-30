<?php
session_start();
require 'vendor/autoload.php'; // Carga PhpSpreadsheet para trabajar con archivos Excel
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Recibe los datos del formulario
$num_proyecto = $_POST['numero_proyecto'] ?? '';
$producto = $_POST['producto'] ?? '';
$cantidad = $_POST['cantidad'] ?? '';
$tipo = $_POST['tipo'] ?? '';
$accion = $_POST['accion'] ?? ''; // 'buscar' o 'guardar'

// Función para validar el formato del número de proyecto
function formatoproyecto($num_proyecto) {
    return preg_match('/^\d{6}_\d{2}_\d{2}$/', $num_proyecto);
}

// Si se presionó el botón de búsqueda
if ($accion === 'buscar') {
    if (empty($num_proyecto) || !formatoproyecto($num_proyecto)) {
        $_SESSION['mensaje'] = "<div class='aviso error'>El número de proyecto es obligatorio y debe tener el formato 123456_12_34.</div>";
    } else {
        // Función para buscar el número de proyecto en el archivo Excel
        $archivo = __DIR__ . '/faltas-de-material.xlsx';
        if (file_exists($archivo)) {
            $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($archivo);
            $sheet = $spreadsheet->getActiveSheet();

            $found = false;
            $resultados = '';

            foreach ($sheet->getRowIterator() as $row) {
                $cell = $sheet->getCell('A' . $row->getRowIndex()); // Columna A (Número de Proyecto)
                if ($cell->getValue() == $num_proyecto) {
                    $producto = $sheet->getCell('B' . $row->getRowIndex())->getValue();
                    $cantidad = $sheet->getCell('C' . $row->getRowIndex())->getValue();
                    $tipo = $sheet->getCell('D' . $row->getRowIndex())->getValue();
                    $resultados .= "<div class='aviso info'>Proyecto encontrado: Producto: $producto, Cantidad: $cantidad, Tipo: $tipo</div>";
                    $found = true;
                }
            }

            if (!$found) {
                $_SESSION['mensaje'] = "<div class='aviso error'>No se encontró el número de proyecto.</div>";
            } else {
                $_SESSION['mensaje'] = $resultados;
            }
        } else {
            $_SESSION['mensaje'] = "<div class='aviso error'>No se encontró el archivo de proyectos.</div>";
        }
    }
} 

// Si se presionó el botón de guardar
elseif ($accion === 'guardar') {
    if (empty($producto) || empty($cantidad) || empty($tipo)) {
        $_SESSION['mensaje'] = "<div class='aviso error'>Error: Todos los campos son obligatorios para guardar los datos.</div>";
    } else {
        // Función para agregar los datos al archivo Excel
        $archivo = __DIR__ . '/faltas-de-material.xlsx';

        if (file_exists($archivo)) {
            $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($archivo);
            $sheet = $spreadsheet->getActiveSheet();
        } else {
            $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();
            $sheet->setCellValue('A1', 'Número de Proyecto');
            $sheet->setCellValue('B1', 'Producto');
            $sheet->setCellValue('C1', 'Cantidad');
            $sheet->setCellValue('D1', 'Tipo');
        }

        // Obtiene la siguiente fila vacía
        $fila = $sheet->getHighestRow() + 1;

        // Agrega los datos en la fila correspondiente
        $sheet->setCellValue('A' . $fila, $num_proyecto);
        $sheet->setCellValue('B' . $fila, $producto);
        $sheet->setCellValue('C' . $fila, $cantidad);
        $sheet->setCellValue('D' . $fila, $tipo);

        // Guarda el archivo
        $writer = new Xlsx($spreadsheet);
        $writer->save($archivo);

        $_SESSION['mensaje'] = "<div class='aviso exito'>Datos guardados correctamente en Excel.</div>";
    }
}

// Redirige de nuevo a la página del formulario
header('Location: index.php');
exit;
?>
