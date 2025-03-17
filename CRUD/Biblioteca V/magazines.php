<?php
include "class/BiblioManager.php";

$manager = new BiblioManager();
$magazines = $manager->getMagazines();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Revistas</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Revistas Disponibles</h1>
    <ul>
        <?php foreach ($magazines as $index => $magazine): ?>
            <li>
                <?= htmlspecialchars($magazine->getTitle()); ?> - <?= htmlspecialchars($magazine->getAuthor()); ?>
                <a href="delete.php?id=<?= $index; ?>&type=magazine">Eliminar</a>
            </li>
        <?php endforeach; ?>
    </ul>
    <a href="index.php">Volver</a>
</body>
</html>
