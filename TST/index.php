<?php
session_start();
require_once "class/Login.php"; // tu clase de login

// --- Verificar sesión ---
if (!isset($_SESSION['usuario'])) {
    header("Location: class/login.php");
    exit;
}

// --- Cargar JSON ---
$data = json_decode(file_get_contents("bbdd/matricula.json"), true);

// --- Preparar búsqueda ---
$busqueda = strtolower(trim($_GET['q'] ?? ''));
$resultados = [];

foreach ($data as $item) {
    if (
        strpos(strtolower($item['matricula']), $busqueda) !== false ||
        strpos(strtolower($item['tipo']), $busqueda) !== false
    ) {
        $resultados[] = $item;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Panel principal</title>
</head>
<body>
  <h1>Bienvenido <?= htmlspecialchars($_SESSION['usuario']) ?></h1>

  <form method="get">
      <input type="text" name="q" placeholder="Buscar..." 
             value="<?= htmlspecialchars($_GET['q'] ?? '') ?>">
      <button type="submit">Buscar</button>
  </form>

  <h2>Resultados:</h2>
  <?php if (!empty($resultados)): ?>
      <ul>
        <?php foreach ($resultados as $r): ?>
          <li>
            Matrícula: <?= htmlspecialchars($r['matricula']) ?> |
            Tipo: <?= htmlspecialchars($r['tipo']) ?>
          </li>
        <?php endforeach; ?>
      </ul>
  <?php elseif(isset($_GET['q'])): ?>
      <p>No se encontraron resultados.</p>
  <?php endif; ?>
</body>
</html>
