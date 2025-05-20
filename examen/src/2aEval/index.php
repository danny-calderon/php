<?php
// Iniciamos la sesión
session_start();

// Incluimos la clase principal de lógica (Lighting)
require_once 'clases/Lighting.php'; // Asegúrate de que la ruta sea correcta

// Cargamos los datos de conexión desde el archivo JSON
$configPath = __DIR__ . '/conf.json';
$config = json_decode(file_get_contents($configPath), true);

// Verificamos si el archivo conf.json se pudo leer correctamente
if (!is_array($config)) {
    die("Error al leer conf.json");
}

// Asignamos cada valor del archivo de configuración a variables
$host = $config['host'] ?? null; 
$dbname = $config['db'] ?? null;
$user = $config['userName'] ?? null;
$password = $config['password'] ?? null;

try {
    // Creamos el objeto PDO para conectarnos a la base de datos
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Si ocurre un error, lo mostramos y detenemos la ejecución
    die("Error al conectar con la base de datos: " . $e->getMessage());
}

// Creamos una instancia de Lighting pasando la conexión PDO
$lighting = new Lighting($pdo);

// Comprobamos si se ha enviado una petición para cambiar el estado de una lámpara
if (isset($_GET['action']) && $_GET['action'] === 'changeStatus') {
    $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
    $status = isset($_GET['status']) ? (int)$_GET['status'] : 0;

    if ($id > 0) {
        $lighting->changeStatus($id, $status); // Cambiamos el estado
    }

    // Redirigimos para evitar reenviar el formulario al refrescar
    header("Location: index.php");
    exit;
}

// Si se ha seleccionado una zona, la usamos como filtro
if (isset($_GET['zone_id'])) {
    $lighting->setFilterZone($_GET['zone_id']);
}

// Obtenemos todas las lámparas, ya sea todas o filtradas por zona
$lamps = $lighting->getAllLamps();
?>

<!-- Comienza la parte HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Estilos CSS internos -->
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

        <!-- Formulario para seleccionar la zona -->
        <form action="" method="get">
            <select name="zone_id">
                <option value='all'>All</option>
                <?php
                // Mostramos las opciones de zona disponibles
                echo $lighting->drawZonesOptions();
                ?>
            </select>
            <input type="submit" value="Filter by zone">
        </form>

        <!-- Mostramos cada lámpara como una caja con su estado -->
        <?php foreach ($lamps as $lamp): ?>
            <div class='element <?= $lamp->getisOn() ? 'on' : 'off' ?>'>
                <h4>
                    <!-- Al hacer clic en la bombilla, se cambia su estado -->
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
