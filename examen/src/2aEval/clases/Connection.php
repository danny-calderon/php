<?php
// clases/Connection.php

// Incluye la clase Lighting (aunque en este archivo no se usa directamente, podrías eliminarlo si no se necesita aquí)
require_once __DIR__ . '/Lighting.php';

class Connection
{
    // Propiedad protegida que almacenará el objeto PDO (la conexión a la base de datos)
    protected PDO $pdo;

    // Constructor: se ejecuta automáticamente al crear una instancia de esta clase
    public function __construct()
    {
        // Ruta del archivo de configuración conf.json
        $configPath = __DIR__ . '/../conf.json';

        // Cargar y decodificar el contenido del JSON a un array asociativo
        $config = json_decode(file_get_contents($configPath), true);

        // Si hay un error al leer el JSON, se lanza una excepción
        if (!is_array($config)) {
            throw new Exception("Error al leer conf.json");
        }

        // Extraer los datos de conexión del archivo de configuración
        $host = $config['host'];
        $dbname = $config['db'];
        $user = $config['userName'];
        $password = $config['password'];

        try {
            // Crear el DSN (cadena de conexión)
            $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

            // Crear una nueva instancia de PDO (conexión a la base de datos)
            $this->pdo = new PDO($dsn, $user, $password);

            // Configurar PDO para lanzar excepciones cuando haya errores
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // Si falla la conexión, mostrar el error y detener el programa
            die("Error al conectar con la base de datos: " . $e->getMessage());
        }
    }

    // Método público opcional para obtener la conexión desde fuera de la clase
    public function getConnection(): PDO
    {
        return $this->pdo;
    }
}
?>
