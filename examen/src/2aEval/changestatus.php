<?php
session_start();
require_once __DIR__ . '/clases/Lighting.php';

// Datos de conexión a la base de datos (ajusta según tu Docker y conf.json si usas)
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

// Instanciar Lighting con PDO
$lighting = new Lighting($pdo);

// Obtener id y status de GET
$id = isset($_GET['id']) ? (int)$_GET['id'] : null;
$status = isset($_GET['status']) ? (int)$_GET['status'] : 0;

// Validar status para que sea 0 o 1
$status = ($status === 1) ? 1 : 0;

// Cambiar estado si id válido
if (!empty($id)) {
    $lighting->changeStatus($id, $status);
}

// Redirigir a la página principal o donde muestres las lámparas
header('Location: index.php');
exit;
