<?php
session_start();
require 'conexion.php'; // Archivo de conexión a la base de datos

$resultados = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num_proyecto = $_POST['numero_proyecto'] ?? '';
    $accion = $_POST['accion'] ?? ''; // Acción de editar

        $conexion = new mysqli("localhost:3307", "sa", "xxx", "mysql_db");

    // Verificar conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Si se está editando un proyecto (solo actualización de cantidad)
    if ($accion == 'editar') {
        $cantidad = $_POST['cantidad'];

        if ($cantidad === '' || !is_numeric($cantidad)) {
            $_SESSION['mensaje'] = "<div class='aviso error'>La cantidad no puede estar vacía y debe ser un número válido.</div>";
            header("Location: buscar.php");
            exit();
        }

        // Actualizar la cantidad en la base de datos
        $stmt = $conexion->prepare("UPDATE materiales SET cantidad = ? WHERE num_proyecto = ?");
        $stmt->bind_param("is", $cantidad, $num_proyecto);

        if ($stmt->execute()) {
            $_SESSION['mensaje'] = "<div class='aviso exito'>Cantidad actualizada correctamente.</div>";
        } else {
            $_SESSION['mensaje'] = "<div class='aviso error'>Error al actualizar la cantidad.</div>";
        }

        $stmt->close();
        $conexion->close();
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

        // Buscar el proyecto en la base de datos
        $stmt = $conexion->prepare("SELECT referencia, cantidad, tipo FROM materiales WHERE num_proyecto = ?");
        $stmt->bind_param("s", $num_proyecto);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($referencia, $cantidad, $tipo);
            $stmt->fetch();

            $resultados .= "<h3>Resultados para el proyecto <strong>$num_proyecto</strong>:</h3>";
            $resultados .= "<p>Referencia: $referencia, Cantidad: $cantidad, Tipo: $tipo</p>";

            // Formulario para actualizar solo la cantidad
            $resultados .= "<form method='post'>
                <input type='hidden' name='numero_proyecto' value='$num_proyecto'>
                <input type='text' name='referencia' value='$referencia' readonly>
                <input type='number' name='cantidad' value='$cantidad' required>
                <input type='text' name='tipo' value='$tipo' readonly>
                <button type='submit' name='accion' value='editar'>Actualizar</button>
            </form>";
        } else {
            $_SESSION['mensaje'] = "<div class='aviso error'>No se encontraron resultados.</div>";
            header("Location: buscar.php");
            exit();
        }

        $stmt->close();
        $conexion->close();
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
