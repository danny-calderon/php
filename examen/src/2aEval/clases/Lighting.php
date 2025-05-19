<?php
require_once __DIR__ . '/Connection.php';
require_once __DIR__ . '/Lamp.php';

class Lighting extends Connection
{
    private string|int $currentFilter = 'all';

    public function setFilterZone(string|int $zoneIdOrAll): void
    {
        $this->currentFilter = $zoneIdOrAll;
    }

    public function getAllLamps(): array
    {
        if ($this->currentFilter === 'all') {
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
            $stmt = $this->pdo->query($sql);
            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
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
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':zone_id', $this->currentFilter, PDO::PARAM_INT);
            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        $lamps = [];

        foreach ($resultados as $row) {
            $lamp = new Lamp(
                $row['lamp_id'],
                $row['lamp_name'],
                (bool)$row['lamp_on'],
                $row['model_part_number'],
                (int)$row['model_wattage'],
                $row['zone_name']
            );
            $lamps[] = $lamp;
        }

        return $lamps;
    }

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
        foreach ($lamps as $lamp) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($lamp->getId()) . '</td>';
            echo '<td>' . htmlspecialchars($lamp->getName()) . '</td>';
            echo '<td>' . ($lamp->isOn() ? 'Sí' : 'No') . '</td>';
            echo '<td>' . htmlspecialchars($lamp->getModel()) . '</td>';
            echo '<td>' . htmlspecialchars($lamp->getWattage()) . '</td>';
            echo '<td>' . htmlspecialchars($lamp->getZone()) . '</td>';
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
    }

    public function getPowerByZone(): array
    {
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

        foreach ($resultados as $row) {
            $potencias[$row['zone_name']] = (int)$row['power'];
        }

        return $potencias;
    }

    public function changeStatus($id, $status): bool
    {
        $sql = "UPDATE lamps SET lamp_on = :status WHERE lamp_id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':status', $status, PDO::PARAM_STR);
        $stmt->bindParam(':id', $id, PDO::PARAM_STR);

        return $stmt->execute();
    }

    public function drawZonesOptions($selectedZoneId = null): string
    {
        $sql = "SELECT zone_id, zone_name FROM zones ORDER BY zone_name";
        $stmt = $this->pdo->query($sql);
        $zones = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $html = '<select name="zone_id" id="zone_id">';
        foreach ($zones as $zone) {
            $selected = ($zone['zone_id'] == $selectedZoneId) ? ' selected' : '';
            $html .= "<option value=\"{$zone['zone_id']}\"$selected>" . htmlspecialchars($zone['zone_name']) . "</option>";
        }
        $html .= '</select>';

        return $html;
    }
}
?>