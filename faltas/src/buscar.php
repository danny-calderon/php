<?php
session_start();
require 'vendor/autoload.php'; 

use PhpOffice\PhpSpreadsheet\IOFactory;

// Ruta del archivo
$archivo = __DIR__ . '/faltas-de-material.xlsx';
$resultados = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num_proyecto = $_POST['numero_proyecto'] ?? '';
    $accion = $_POST['accion'] ?? ''; // Acción de editar

    // Si se está editando un proyecto (solo actualización de cantidad)
    if ($accion == 'editar') {
        $cantidad = $_POST['cantidad'];

        // Validar que la cantidad no esté vacía (permitir 0 como valor válido)
        if ($cantidad === '' || !is_numeric($cantidad)) {
            $_SESSION['mensaje'] = "<div class='aviso error'>La cantidad no puede estar vacía y debe ser un número válido.</div>";
            header("Location: buscar.php");
            exit();
        }

        // Cargar el archivo Excel
        if (!file_exists($archivo)) {
            $_SESSION['mensaje'] = "<div class='aviso error'>No hay datos registrados aún.</div>";
            header("Location: buscar.php");
            exit();
        }

        $spreadsheet = IOFactory::load($archivo);
        $sheet = $spreadsheet->getActiveSheet();
        $found = false;

        // Buscar el proyecto en el archivo y actualizar solo la cantidad
        foreach ($sheet->getRowIterator() as $row) {
            $cell = $sheet->getCell('A' . $row->getRowIndex());
            if ($cell->getValue() == $num_proyecto) {
                // Actualizar solo la cantidad
                $sheet->setCellValue('C' . $row->getRowIndex(), $cantidad);
                $found = true;
                break;
            }
        }

        if (!$found) {
            $_SESSION['mensaje'] = "<div class='aviso error'>No se encontró el proyecto para editar.</div>";
            header("Location: buscar.php");
            exit();
        }

        // Guardar el archivo actualizado
        $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
        $writer->save($archivo);

        $_SESSION['mensaje'] = "<div class='aviso exito'>Cantidad actualizada correctamente.</div>";
        header("Location: buscar.php");
        exit();
    }

    // Si se está buscando el proyecto
    if (empty($accion)) {
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
                $tipo = $sheet->getCell('D' . $row->getRowIndex())->getValue();

                $resultados .= "<p>Referencia: $referencia, Cantidad: $cantidad, Tipo: $tipo</p>";

                // Agregar formulario para actualizar solo la cantidad
                $resultados .= "<form method='post'>
                    <input type='hidden' name='numero_proyecto' value='$num_proyecto'>
                    <input type='text' name='referencia' value='$referencia' readonly>
                    <input type='number' name='cantidad' value='$cantidad' required>
                    <input type='text' name='tipo' value='$tipo' readonly>
                    <button type='submit' name='accion' value='editar'>Actualizar</button>
                </form>";

                $found = true;
            }
        }

        if (!$found) {
            $_SESSION['mensaje'] = "<div class='aviso error'>No se encontraron resultados.</div>";
            header("Location: buscar.php");
            exit();
        }
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

    <div class="container">
        <h2>Buscar Datos</h2>

        <form method="post">
            <label for="numero_proyecto">Número de Proyecto:</label>
            <input type="text" id="numero_proyecto" name="numero_proyecto" required>
            <button type="submit">Buscar</button>
        </form>

        <div class="volver-btn">
            <a href="index.php"><button>Volver</button></a>
        </div>

        <?php
        if (!empty($resultados)) {
            echo "<div class='resultados'>$resultados</div>";
        }

        if (isset($_SESSION['mensaje'])) {
            echo "<div class='mensaje'>" . $_SESSION['mensaje'] . "</div>";
            unset($_SESSION['mensaje']);
        }
        ?>
    </div>

</body>
</html>
