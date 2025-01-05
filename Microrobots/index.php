<?php
session_start();
?>
<html>
<head>
    <title>ex1aEval</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1, h3 {
            text-align: center;
            color: #333;
        }
        table {
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        table th, table td {
            padding: 15px;
            text-align: center;
            font-size: 16px;
            font-weight: bold;
            color: #fff;
        }
        table td {
            border: 1px solid #ccc;
            background-color: #3498db;
        }
        table td:nth-child(odd) {
            background-color: #2980b9;
        }
        form {
            max-width: 500px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        form label {
            display: block;
            font-size: 14px;
            margin-bottom: 10px;
            color: #333;
        }
        form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        form button {
            width: 100%;
            padding: 10px;
            background-color: #2ecc71;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        form button:hover {
            background-color: #27ae60;
        }
        p {
            text-align: center;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Examen 1a Evaluación</h1>

<?php
$numeros = [1, 2, 3, 4, 5, 6];
$colores = ['RED', 'YEL', 'GRE', 'BLU', 'BLA', 'WHI'];

// FUNCIONES

// * Generar combinaciones *
/* 
en esta función lo que hacemos es recorremos los dos arrays $numeros y $colores, y lo que hacemos es darles un valor 
[1 , RED], [2, YEL] ... con estos valores lo que hacemo despues con el shuffle es mezclar la tabla, hacer que los valores
esten en lugares aleatorios y claro todo esto esta en el array de combinaciones
*/
function generarCombinaciones($numeros, $colores) {
    $combinaciones = [];
    foreach ($numeros as $numero) {
        foreach ($colores as $color) {
            $combinaciones[] = [$numero, $color];
        }
    }
    shuffle($combinaciones);
    return $combinaciones;
}
// * Generar tablero *
/* 
esto lo que hace es recibir un los nnumeros y posociones del generar combinaciones [1, RED]... 
con esos datos los que hacemos es organizarlo en una taglad e 6 * 6 
*/
function generarTablero($combinaciones) {
    $tablero = [];
    $index = 0;
    for ($i = 0; $i < 6; $i++) {
        $fila = [];
        for ($j = 0; $j < 6; $j++) {
            $fila[] = $combinaciones[$index];
            $index++;
        }
        $tablero[] = $fila;
    }
    return $tablero;
}
// * Dibujar tablero en HTML *
/* 
lo que hace esto es mostrar la tabla en html y con ayuda de los css que les metemos arriba se ve bonita la tabla, 
esto es para hacerl alegible la tabla
*/
function dibujarTablero($tablero) {
    echo "<table>";
    foreach ($tablero as $fila) {
        echo "<tr>";
        foreach ($fila as $celda) {
            echo "<td>" . $celda[0] . " " . $celda[1] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
// * Validar tirada *
/* 
lo que hacemos es comprobar que la tirada esta bien echa 
*/
function tiradaValida($tablero, $fila1, $col1, $fila2, $col2) {
    if ($fila1 !== $fila2 && $col1 !== $col2) {
        return false;
    }

    $origen = $tablero[$fila1][$col1];
    $destino = $tablero[$fila2][$col2];

    if ($origen[0] === $destino[0] || $origen[1] === $destino[1]) {
        return true;
    }
    return false;
}

function tiradaPermitida($fila1, $col1, $fila2, $col2) {
    return $fila1 === $fila2 || $col1 === $col2;
}

$combinaciones = generarCombinaciones($numeros, $colores);
$tablero = generarTablero($combinaciones);
$_SESSION['tablero'] = $tablero;

echo "<h3>Tablero Inicial</h3>";
dibujarTablero($tablero);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fila1 = intval($_POST['fila1']);
    $col1 = intval($_POST['col1']);
    $fila2 = intval($_POST['fila2']);
    $col2 = intval($_POST['col2']);

    if (tiradaPermitida($fila1, $col1, $fila2, $col2)) {
        if (tiradaValida($tablero, $fila1, $col1, $fila2, $col2)) {
            echo "<p style='color: green;'>Tirada válida: ($fila1, $col1) -> ($fila2, $col2)</p>";
        } else {
            echo "<p style='color: red;'>Tirada no válida: ($fila1, $col1) -> ($fila2, $col2)</p>";
        }
    } else {
        echo "<p style='color: orange;'>Tirada no permitida: Las casillas deben estar en la misma fila o columna.</p>";
    }
}
?>

<form method="post">
    <h3>Introduce las coordenadas</h3>
    <label>Fila inicio:</label>
    <input type="number" name="fila1" min="0" max="5" required>
    <label>Columna inicio:</label>
    <input type="number" name="col1" min="0" max="5" required>
    <label>Fila fin:</label>
    <input type="number" name="fila2" min="0" max="5" required>
    <label>Columna fin:</label>
    <input type="number" name="col2" min="0" max="5" required>
    <button type="submit">Enviar tirada</button>
</form>
</body>
</html>
