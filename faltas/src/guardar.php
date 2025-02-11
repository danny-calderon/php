<?php
session_start();
require 'conexion.php'; // Archivo de conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num_proyecto = $_POST['numero_proyecto'] ?? '';
    $referencia = $_POST['referencia'] ?? '';
    $cantidad = $_POST['cantidad'] ?? '';
    $tipo = $_POST['tipo'] ?? '';

    if (empty($num_proyecto) || empty($referencia) || empty($cantidad) || empty($tipo)) {
        $_SESSION['mensaje'] = "<div class='aviso error'>Todos los campos son obligatorios.</div>";
        header("Location: guardar.php");
        exit();
    }

    // Conectar a la base de datos
    $conexion = new mysqli("localhost:3307", "sa", "xxx", "mysql_db");

    // Verificar conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Preparar la consulta
    $stmt = $conexion->prepare("INSERT INTO materiales (num_proyecto, referencia, cantidad, tipo) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssis", $num_proyecto, $referencia, $cantidad, $tipo);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        $_SESSION['mensaje'] = "<div class='aviso exito'>Datos guardados correctamente.</div>";
    } else {
        $_SESSION['mensaje'] = "<div class='aviso error'>Error al guardar los datos.</div>";
    }

    // Cerrar conexión
    $stmt->close();
    $conexion->close();

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
