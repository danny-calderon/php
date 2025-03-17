<?php
include "class/BiblioManager.php";

if (isset($_GET['id']) && isset($_GET['type'])) {
    $manager = new BiblioManager("data/data.json");
    $manager->deleteItem($_GET['id'], $_GET['type']);
}

header("Location: index.php");
exit();
