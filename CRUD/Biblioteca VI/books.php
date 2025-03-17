<?php
include "class/BiblioManager.php";

$manager = new BiblioManager("data/data.json");
$books = array_values($manager->getBooks()); // Asegurar que es un array indexado correctamente

// Configuración de paginación
$itemsPorPagina = 5;
$totalLibros = count($books);
$totalPaginas = max(ceil($totalLibros / $itemsPorPagina), 1);
$paginaActual = isset($_GET['page']) ? max((int) $_GET['page'], 1) : 1;
$paginaActual = min($paginaActual, $totalPaginas);
$inicio = ($paginaActual - 1) * $itemsPorPagina;

// Obtener solo los libros de la página actual
$booksPaginados = array_slice($books, $inicio, $itemsPorPagina);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Libros</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Libros Disponibles</h1>
        <ul>
            <?php foreach ($booksPaginados as $book): ?>
                <li>
                    <?= htmlspecialchars($book->getTitle()); ?> - <?= htmlspecialchars($book->getAuthor()); ?>
                    <a href="delete.php?id=<?= urlencode($book->getId()); ?>&type=book">Eliminar</a>
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
