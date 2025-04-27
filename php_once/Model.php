<?php
require_once 'Connection.php';

class Model extends Connection {

    private $conn;

    public function __construct() {
        parent::__construct();
        $this->conn = $this->connect();
    }

    // Método para borrar todas las tareas
    public function deleteList() {
        $sql = "DELETE FROM tareas";
        if ($this->conn->query($sql) === TRUE) {
            return true;
        } else {
            echo "Error al eliminar tareas: " . $this->conn->error;
            return false;
        }
    }

    // Método para importar tareas desde tareas.json
    public function import() {
        $jsonFile = 'tareas.json';

        if (!file_exists($jsonFile)) {
            echo "No se encontró el fichero tareas.json";
            return;
        }

        $jsonData = json_decode(file_get_contents($jsonFile), true);

        $stmt = $this->conn->prepare("INSERT INTO tareas (nombre, descripcion, fecha) VALUES (?, ?, ?)");

        if (!$stmt) {
            die("Error preparando la consulta: " . $this->conn->error);
        }

        foreach ($jsonData as $tarea) {
            $nombre = $tarea['nombre'];
            $descripcion = $tarea['descripcion'];

            // Convertir la fecha a formato Y-m-d
            $fecha = date('Y-m-d', strtotime($tarea['fecha']));

            $stmt->bind_param('sss', $nombre, $descripcion, $fecha);
            $stmt->execute();
        }

        $stmt->close();
    }

    // Método para inicializar la importación
    public function init() {
        if ($this->deleteList()) {
            $this->import();
            echo "Base de datos inicializada correctamente.";
        } else {
            echo "No se pudo inicializar la base de datos.";
        }
    }
}

?>
