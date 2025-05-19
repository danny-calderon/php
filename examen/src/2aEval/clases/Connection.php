<?php
// clases/Connection.php
require_once __DIR__ . '/Lighting.php';

class Connection
{
    protected PDO $pdo;

    public function __construct()
{
    $configPath = __DIR__ . '/../conf.json';
    $config = json_decode(file_get_contents($configPath), true);

    if (!is_array($config)) {
        throw new Exception("Error al leer conf.json");
    }

    $host = $config['host'];
    $dbname = $config['db'];
    $user = $config['userName'];
    $password = $config['password'];

    try {
        $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
        $this->pdo = new PDO($dsn, $user, $password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Error al conectar con la base de datos: " . $e->getMessage());
    }
}

    // Método opcional para obtener la conexión
    public function getConnection(): PDO
    {
        return $this->pdo;
    }
}
?>
