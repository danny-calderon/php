<?php
include "class/BiblioManager.php";

$manager = new BiblioManager("data/data.json");
$magazines = array_values($manager->getMagazines()); // Asegurar índice correcto

// Configuración de paginación
$itemsPorPagina = 5;
$totalRevistas = count($magazines);
$totalPaginas = max(ceil($totalRevistas / $itemsPorPagina), 1);
$paginaActual = isset($_GET['page']) ? max((int) $_GET['page'], 1) : 1;
$paginaActual = min($paginaActual, $totalPaginas);
$inicio = ($paginaActual - 1) * $itemsPorPagina;

// Obtener solo las revistas de la página actual
$magazinesPaginadas = array_slice($magazines, $inicio, $itemsPorPagina);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Revistas</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Revistas Disponibles</h1>
        <ul>
            <?php foreach ($magazinesPaginadas as $magazine): ?>
                <li>
                    <?= htmlspecialchars($magazine->getTitle()); ?> - <?= htmlspecialchars($magazine->getAuthor()); ?>
                    <a href="delete.php?id=<?= urlencode($magazine->getId()); ?>&type=magazine">Eliminar</a>
                </li>
            <?php endforeach; ?>
        </ul>

        <!-- Paginación -->
        <div class="pagination">
            <?php if ($paginaActual > 1): ?>
                <a href="?page=<?= $paginaActual - 1 ?>">&laquo; Anterior</a>
            <?php endif; ?>
            
            <?php for ($i = 1; $i <= $totalPaginas; $i++): ?>
                <a href="?page=<?= $i ?>" class="<?= ($i == $paginaActual) ? 'active' : '' ?>"><?= $i ?></a>
            <?php endfor; ?>

            <?php if ($paginaActual < $totalPaginas): ?>
                <a href="?page=<?= $paginaActual + 1 ?>">Siguiente &raquo;</a>
            <?php endif; ?>
        </div>

        <a href="index.php">Volver</a>
    </div>
</body>
</html>
