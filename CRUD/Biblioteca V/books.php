<?php
include "class/BiblioManager.php";
$manager = new BiblioManager("data/data.json");
$books = $manager->getBooks();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>📚 Libros Disponibles</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>📚 Libros Disponibles</h1>

        <?php if (empty($books)): ?>
            <p class="info">No hay libros en la biblioteca.</p>
        <?php else: ?>
            <ul class="book-list">
                <?php foreach ($books as $book): ?>
                    <li class="book-item">
                        📖 <strong>Libro:</strong> <?= htmlspecialchars($book->getTitle()); ?> - <?= htmlspecialchars($book->getAuthor()); ?>
                        <a href="delete.php?id=<?= $book->getId(); ?>&type=book" class="delete-btn">🗑️ Eliminar</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <a href="index.php" class="back-btn">⬅ Volver</a>
    </div>
</body>
</html>
