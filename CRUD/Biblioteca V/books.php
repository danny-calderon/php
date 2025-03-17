<?php
include "class/BiblioManager.php";
$manager = new BiblioManager("data/data.json");
$books = $manager->getBooks();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Libros</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Libros Disponibles</h1>
    <ul>
        <?php foreach ($books as $book): ?>
            <li>
                <?= $book->getTitle(); ?> - <?= $book->getAuthor(); ?>
                <a href="delete.php?id=<?= $book->getId(); ?>&type=book">Eliminar</a>
            </li>
        <?php endforeach; ?>
    </ul>
    <a href="index.php">Volver</a>
</body>
</html>
