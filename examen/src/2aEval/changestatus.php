<?php
// changestatus.php
session_start();
require_once 'path/to/your/Lighting.php';

// Configura la conexión PDO, aquí un ejemplo:
$host = 'localhost';
$db = 'tu_basedatos';
$user = 'tu_usuario';
$pass = 'tu_password';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    die('Error al conectar a la base de datos: ' . $e->getMessage());
}

$lighting = new Lighting($pdo);

// Obtén el id y status del request, por ejemplo vía GET
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$status = isset($_GET['status']) ? (int)$_GET['status'] : 0;

if ($id > 0) {
    $lighting->changeStatus($id, $status);
}

// Redirige a la página del listado
header("Location: listado.php");
exit;
