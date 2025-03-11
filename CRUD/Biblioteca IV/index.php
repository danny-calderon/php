<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <?php
        require_once("class/BiblioManager.php");

        $manager = new BiblioManager();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['add_book'])) {
                $title = $_POST['title'];
                $author = $_POST['author'];
                $year = $_POST['year'];
                $pages = $_POST['pages'];
                $manager->addPublication($title, $author, $year, $pages);
            } elseif (isset($_POST['add_magazine'])) {
                $title = $_POST['title'];
                $author = $_POST['author'];
                $year = $_POST['year'];
                $genre = $_POST['genre'];
                $manager->addPublication($title, $author, $year, $genre);
            } elseif (isset($_POST['delete_book'])) {
                $id = $_POST['id'];
                $manager->deleteBook($id);
            } elseif (isset($_POST['delete_magazine'])) {
                $id = $_POST['id'];
                $manager->deleteMagazine($id);
            }
        }
        ?>
        <h1>Sistema de Gestión de Libros</h1>
        <h2>Añadir Libro</h2>
        <form method="post">
            Título: <input type="text" name="title" required><br>
            Autor: <input type="text" name="author" required><br>
            Año: <input type="number" name="year" required><br>
            Páginas: <input type="number" name="pages" required><br>
            <input type="submit" name="add_book" value="Añadir Libro">
        </form>

        <h2>Añadir Revista</h2>
        <form method="post">
            Título: <input type="text" name="title" required><br>
            Autor: <input type="text" name="author" required><br>
            Año: <input type="number" name="year" required><br>
            Género: <input type="text" name="genre" required><br>
            <input type="submit" name="add_magazine" value="Añadir Revista">
        </form>

        <h2>Eliminar Libro</h2>
        <form method="post">
            ID: <input type="number" name="id" required><br>
            <input type="submit" name="delete_book" value="Eliminar Libro">
        </form>

        <h2>Eliminar Revista</h2>
        <form method="post">
            ID: <input type="number" name="id" required><br>
            <input type="submit" name="delete_magazine" value="Eliminar Revista">
        </form>
    </div>
</body>
</html>
