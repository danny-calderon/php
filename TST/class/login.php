<?php 

// Cargar el JSON
$data = json_decode(file_get_contents("bbdd/matricula.json"), true);

// Guardar lo que escribió el usuario
$busqueda = strtolower(trim($_GET['q'] ?? ''));

// Inicializar resultados
$resultados = [];

foreach ($data as $item) {
    if (strpos(strtolower($item['matricula']), $busqueda) !== false) {
        $resultados[] = $item;
    }
}
?>
