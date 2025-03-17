<?php
include "class/BiblioManager.php";

$manager = new BiblioManager();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $type = $_POST["type"];
    $title = $_POST["title"];
    $author = $_POST["author"];
    $extra = $_POST["extra"]; // Páginas (libro) o tipo (revista)

    if (empty($title) || empty($author) || empty($extra)) {
        echo "<p style='color:red;'>⚠️ Debes completar todos los campos.</p>";
    } else {
        $manager->addPublication($title, $author, date("Y"), $extra);
        echo "<p style='color:green;'>✅ Publicación añadida con éxito.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Añadir Publicación</title>
    <link rel="stylesheet" href="css/style.css">
    <script>
        function updatePlaceholder() {
            let type = document.getElementById("type").value;
            let extraField = document.getElementById("extra");
            
            if (type === "book") {
                extraField.placeholder = "Número de páginas";
                extraField.type = "number";
            } else {
                extraField.placeholder = "Tipo de revista";
                extraField.type = "text";
            }
        }
    </script>
</head>
<body>
    <h1>Añadir Libro o Revista</h1>
    <form method="post">
        <label>Título:</label>
        <input type="text" name="title" required>
        
        <label>Autor:</label>
        <input type="text" name="author" required>
        
        <label>Tipo:</label>
        <select name="type" id="type" onchange="updatePlaceholder()">
            <option value="book">Libro</option>
            <option value="magazine">Revista</option>
        </select>

        <label id="extra-label">Número de páginas / Tipo de revista:</label>
        <input type="text" name="extra" id="extra" placeholder="Número de páginas" required>

        <button type="submit">Añadir</button>
    </form>
</body>
</html>
