<?php
session_start();
require_once 'clases/Lighting.php'; // Asegúrate de que la ruta sea correcta

// Configura la conexión PDO
$configPath = __DIR__ . '/conf.json';
$config = json_decode(file_get_contents($configPath), true);

if (!is_array($config)) {
    die("Error al leer conf.json");
}

$host = $config['host'] ?? null; 
$dbname = $config['db'] ?? null;
$user = $config['userName'] ?? null;
$password = $config['password'] ?? null;


try {
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error al conectar con la base de datos: " . $e->getMessage());
}

$lighting = new Lighting($pdo);

// Manejo de la lógica para cambiar el estado de las lámparas
if (isset($_GET['action']) && $_GET['action'] === 'changeStatus') {
    $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
    $status = isset($_GET['status']) ? (int)$_GET['status'] : 0;

    if ($id > 0) {
        $lighting->changeStatus($id, $status);
    }

    // Redirige a la misma página para evitar reenvíos de formulario
    header("Location: index.php");
    exit;
}

// Establecer un filtro de zona si se proporciona
if (isset($_GET['zone_id'])) {
    $lighting->setFilterZone($_GET['zone_id']);
}

// Obtener todas las lámparas
$lamps = $lighting->getAllLamps();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: lightcyan;
        }

        .center {
            margin: auto;
            width: 60%;
            padding: 10px;
            background-color: lightgreen;
        }

        .element {
            display: inline-block;
            width: 100px;
            height: 120px;
            font-size: .6em;
            text-align: center;
            margin: 10px;
        }

        .element,
        .center {
            box-shadow: 3px 3px 5px 6px rgb(87, 137, 87);
            border-radius: 10px;
            border: 3px solid navy;
        }

        .element img {
            width: 3em;
            vertical-align: middle;
        }

        .on {
            background-color: lightyellow;
        }

        .off {
            background-color: lightslategray;
        }

        h1 {
            font-size: 1.5em;
            text-align: center;
            background-color: black;
            color: azure;
        }

        form {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="center">
        <h1>BIG STADIUM - LIGHTING CONTROL PANEL</h1>
        <form action="" method="get">
            <select name="zone_id">
                <option value='all'>All</option>
                <?php
                // Generar opciones de zonas
                echo $lighting->drawZonesOptions();
                ?>
            </select>
            <input type="submit" value="Filter by zone">
        </form>

        <?php foreach ($lamps as $lamp): ?>
            <div class='element <?= $lamp->getisOn() ? 'on' : 'off' ?>'>
                <h4>
                <a href='changestatus.php?id=<?= $lamp->getId() ?>&status=<?= $lamp->getisOn() ? 0 : 1 ?>'>
                <img src='img/bulb-icon-<?= $lamp->getisOn() ? 'on' : 'off' ?>.png'>
                    </a>
                    <?= htmlspecialchars($lamp->getName()) ?>
                </h4>
                <h1><?= htmlspecialchars($lamp->getWattage()) ?> W.</h1>
                <h4><?= htmlspecialchars($lamp->getZone()) ?></h4>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>
