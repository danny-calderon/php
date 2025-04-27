<?php

class Connection {
    // Atributos privados
    private $host;
    private $user;
    private $password;
    private $database;
    private $conn;

    // Constructor: lee datos de conf.json
    public function __construct($configFile = 'conf.json') {
        if (file_exists($configFile)) {
            $config = json_decode(file_get_contents($configFile), true);
            $this->host = $config['host'];
            $this->user = $config['user'];
            $this->password = $config['password'];
            $this->database = $config['database'];
        } else {
            throw new Exception("Archivo de configuración no encontrado.");
        }
    }

    // Método para conectarse
    public function connect() {
        $this->conn = new mysqli(
            $this->host,
            $this->user,
            $this->password,
            $this->database
        );

        if ($this->conn->connect_error) {
            die("Error de conexión: " . $this->conn->connect_error);
        }

        return $this->conn;
    }
}

?>
