<?php
include "class/BiblioManager.php";

$manager = new BiblioManager("data/data.json");
$magazines = $manager->getMagazines();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>📰 Revistas Disponibles</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>📰 Revistas Disponibles</h1>

        <?php if (empty($magazines)): ?>
            <p class="info">No hay revistas en la biblioteca.</p>
        <?php else: ?>
            <ul class="magazine-list">
                <?php foreach ($magazines as $index => $magazine): ?>
                    <li class="magazine-item">
                        <span><?= htmlspecialchars($magazine->getTitle()); ?> - <?= htmlspecialchars($magazine->getAuthor()); ?></span>
                        <a href="delete.php?id=<?= $index; ?>&type=magazine" class="delete-btn">🗑️ Eliminar</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <a href="index.php" class="back-btn">⬅ Volver</a>
    </div>
</body>
</html>
