<?php
// changestatus.php
session_start();
require_once __DIR__ . '/clases/Lighting.php';

// Datos de conexión a la base de datos
$host = 'db';          // Nombre del servicio MySQL en Docker
$dbname = 'examen';    // Nombre de la base de datos
$user = 'root';        // Usuario
$pass = 'test';        // Contraseña
$charset = 'utf8mb4';

// Construir DSN
$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

// Opciones PDO
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    die('Error al conectar a la base de datos: ' . $e->getMessage());
}

// Instancia Lighting con la conexión PDO
$lighting = new Lighting($pdo);

// Obtener id y status desde GET
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$status = isset($_GET['status']) ? $_GET['status'] : '0';

// Convertir el status a entero 0 o 1 (por si viene como "on"/"off")
if ($status === 'on' || $status === '1' || $status === 1) {
    $status = 1;
} else {
    $status = 0;
}

// Cambiar estado solo si id válido
if ($id > 0) {
    $lighting->changeStatus($id, $status);
}

// Redirigir a la página principal (ajusta según corresponda)
header('Location: index.php');
exit;
