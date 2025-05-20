<?php
// Importamos las clases necesarias
require_once __DIR__ . '/Connection.php'; // Clase para conectarse a la base de datos
require_once __DIR__ . '/Lamp.php';       // Clase que representa una lámpara

// La clase Lighting hereda de Connection, por lo tanto tiene acceso a la base de datos
class Lighting extends Connection
{
    // Atributo privado que guarda el filtro actual de zona (puede ser un número o 'all')
    private string|int $currentFilter = 'all';

    // Establece el filtro por zona (por ejemplo, solo mostrar lámparas de cierta zona)
    public function setFilterZone(string|int $zoneIdOrAll): void
    {
        $this->currentFilter = $zoneIdOrAll;
    }

    // Obtiene todas las lámparas de la base de datos, según el filtro actual
    public function getAllLamps(): array
    {
        // Si no hay filtro (mostrar todas)
        if ($this->currentFilter === 'all') {
            // Consulta SQL para traer todas las lámparas con su información
            $sql = "SELECT 
                        lamps.lamp_id, 
                        lamps.lamp_name, 
                        lamp_on, 
                        lamp_models.model_part_number, 
                        lamp_models.model_wattage, 
                        zones.zone_name 
                    FROM lamps 
                    INNER JOIN lamp_models ON lamps.lamp_model = lamp_models.model_id 
                    INNER JOIN zones ON lamps.lamp_zone = zones.zone_id 
                    ORDER BY lamps.lamp_id;";
            $stmt = $this->pdo->query($sql); // Ejecutamos directamente porque no hay parámetros
            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            // Consulta SQL con filtro por zona
            $sql = "SELECT 
                        lamps.lamp_id, 
                        lamps.lamp_name, 
                        lamp_on, 
                        lamp_models.model_part_number, 
                        lamp_models.model_wattage, 
                        zones.zone_name 
                    FROM lamps 
                    INNER JOIN lamp_models ON lamps.lamp_model = lamp_models.model_id 
                    INNER JOIN zones ON lamps.lamp_zone = zones.zone_id 
                    WHERE lamps.lamp_zone = :zone_id
                    ORDER BY lamps.lamp_id;";
            $stmt = $this->pdo->prepare($sql); // Preparamos para usar parámetros
            $stmt->bindParam(':zone_id', $this->currentFilter, PDO::PARAM_INT); // Pasamos el filtro
            $stmt->execute(); // Ejecutamos la consulta
            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        $lamps = []; // Array que almacenará objetos Lamp

        // Por cada fila obtenida, creamos una instancia de Lamp y la añadimos al array
        foreach ($resultados as $row) {
            $lamp = new Lamp(
                $row['lamp_id'],
                $row['lamp_name'],
                (bool)$row['lamp_on'], // Convertimos a booleano
                $row['model_part_number'],
                (int)$row['model_wattage'],
                $row['zone_name']
            );
            $lamps[] = $lamp;
        }

        return $lamps; // Devolvemos todas las lámparas encontradas
    }

    // Dibuja una tabla HTML con la información de las lámparas
    public function drawLampsList(array $lamps): void
    {
        echo '<table border="1" cellpadding="8">';
        echo '<thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Encendida</th>
                    <th>Modelo</th>
                    <th>Potencia (W)</th>
                    <th>Zona</th>
                </tr>
              </thead>';
        echo '<tbody>';
        // Recorremos cada lámpara y mostramos sus datos en una fila de la tabla
        foreach ($lamps as $lamp) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($lamp->getId()) . '</td>';
            echo '<td>' . htmlspecialchars($lamp->getName()) . '</td>';
            echo '<td>' . ($lamp->isOn() ? 'Sí' : 'No') . '</td>'; // Mostramos estado
            echo '<td>' . htmlspecialchars($lamp->getModel()) . '</td>';
            echo '<td>' . htmlspecialchars($lamp->getWattage()) . '</td>';
            echo '<td>' . htmlspecialchars($lamp->getZone()) . '</td>';
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
    }

    // Devuelve la potencia total encendida por zona
    public function getPowerByZone(): array
    {
        // Consulta que suma la potencia de las lámparas que están encendidas, agrupadas por zona
        $sql = "SELECT 
                    zones.zone_name, 
                    SUM(lamp_models.model_wattage) AS power 
                FROM lamps 
                INNER JOIN lamp_models ON lamps.lamp_model = lamp_models.model_id 
                INNER JOIN zones ON lamps.lamp_zone = zones.zone_id 
                WHERE lamps.lamp_on = 1 
                GROUP BY zones.zone_name 
                ORDER BY zones.zone_name;";
        $stmt = $this->pdo->query($sql);
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $potencias = [];

        // Guardamos en un array asociativo la potencia por cada zona
        foreach ($resultados as $row) {
            $potencias[$row['zone_name']] = (int)$row['power'];
        }

        return $potencias; // Devolvemos las potencias por zona
    }

    // Cambia el estado (encendida/apagada) de una lámpara por su ID
    public function changeStatus($id, $status): bool
    {
        // Consulta para actualizar el estado de encendido
        $sql = "UPDATE lamps SET lamp_on = :status WHERE lamp_id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':status', $status, PDO::PARAM_STR); // Estado: 1 o 0
        $stmt->bindParam(':id', $id, PDO::PARAM_STR);          // ID de la lámpara

        return $stmt->execute(); // Ejecutamos y devolvemos si fue exitoso o no
    }

    // Devuelve el <select> HTML con todas las zonas como opciones
    public function drawZonesOptions($selectedZoneId = null): string
    {
        $sql = "SELECT zone_id, zone_name FROM zones ORDER BY zone_name";
        $stmt = $this->pdo->query($sql);
        $zones = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $html = '<select name="zone_id" id="zone_id">';
        foreach ($zones as $zone) {
            // Si la zona coincide con la seleccionada, se marca como 'selected'
            $selected = ($zone['zone_id'] == $selectedZoneId) ? ' selected' : '';
            $html .= "<option value=\"{$zone['zone_id']}\"$selected>" . htmlspecialchars($zone['zone_name']) . "</option>";
        }
        $html .= '</select>';

        return $html; // Devolvemos el HTML generado
    }
}
?>
