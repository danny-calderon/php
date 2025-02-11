<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Faltas de Material</h2>

    <?php
    if (isset($_SESSION['mensaje'])) {
        echo "<div class='mensaje'>" . $_SESSION['mensaje'] . "</div>";
        unset($_SESSION['mensaje']);
    }
    ?>

    <div class="botones">
        <a href="guardar.php"><button>Guardar</button></a>
        <a href="buscar.php"><button>Buscar</button></a>
    </div>
</body>
</html>