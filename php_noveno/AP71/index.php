<?php 
require_once 'class/Conection.php';
$connection = new Conection();
?>
<!DOCTYPE html>
<html lang="es"></html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to LAMP Infrastructure</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>
 <body>
    <div class="container-fluid">
        <?php
            echo "<h1 class='text-center'>Welcome DAM Students</h1>";
            echo "<h2 class='text-center'>pdo example</h2>";

            $query = "SELECT * FROM Person";
            $result = $connection->getConn()->query($query);

            echo "<table class='table table-bordered'>";
            echo '<thead><tr><th>id</th><th>Name</th><th>namex</th></tr></thead>';

            while ($value = $result->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                foreach ($value as $element) {
                    echo "<td>" . $element . "</td>";
                }
               echo "</tr>";
            }
            echo "</table>";
        ?>
    </div>
 </body>