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
function generarCombinaciones($numeros, $colores): array {
    
    $combinaciones = []; //hacemos un array el cual es el que vamos a retornar 

    //Recorremos la lista de numeros
    foreach ($numeros as $numero) {

        //Redorremos por cada numero cada color en la lista de colores
        foreach ($colores as $color) {

            //creamos una lista de cada combinación de colores y numeros, quedaria mas o menos asi 
            /*
            [1, 'RED']
            [1, 'YEL']
            [1, 'GRE']
            [1, 'BLU']
            [1, 'BLA']
            [1, 'WHI']
            [2, 'RED']
            [2, 'YEL']
            [2, 'GRE']
            [2, 'BLU']
            [2, 'BLA']
            [2, 'WHI']
            ...    
            */
            $combinaciones[] = [$numero, $color];
        }
    }
    
    // Ordenamos las combinaciones por número y luego por color alfabéticamente
    usort($combinaciones, function ($a, $b) {

        // Comparamos primero por número

        /*
        ejemplo de uso del usort:

        Suponiendo que esto son las combinaciones

        $combinaciones = [
        [2, 'RED'], --> A
        [1, 'BLU'], --> B
        ];

        $A = [2, 'RED'];  // Primer elemento
        $B = [1, 'BLU'];  // Segundo elemento

        Números: a[0] = 2 y b[0] = 1. Como 2 > 1, devolvemos 2 - 1 = 1.
        Resultado: [1, 'BLU'] va antes que [2, 'RED']

        */
        if ($a[0] === $b[0]) {

            // Si los números son iguales, comparamos por color
            return strcmp($a[1], $b[1]);
        }
        // Si los números son diferentes, devolvemos la diferencia numérica
        return $a[0] - $b[0];

    });
    return $combinaciones; //retornamos el resultado que seria los numeros y los colores aleatoriamente
}

/*------------------------------------------------------+------------------------------------------------------------------*/

// * Generar tablero *
/* 
esto lo que hace es recibir un los nnumeros y posociones del generar combinaciones [1, RED]... 
con esos datos los que hacemos es organizarlo en una tabla de 6 * 6 
*/
function generarTablero($combinaciones): array {

    //generamos un tablero vacio 
    $tablero = [];

    //lo usamos para ubicarnos en las caombinaciones que allan 
    $index = 0;

    //generamos 6 filas del tablero
    for ($i = 0; $i < 4; $i++) {
        //creamos un array vacio para cada fila
        $fila = [];
        
        //generamos 4 columnas
        for ($j = 0; $j < 4; $j++) {
            
            //añadimos una combinacion a cada cajon, 
            $fila[] = $combinaciones[$index];
            // pasamos de cajon 
            $index++;
        }
        //lo añadimos a tablero y asi tenemos el tablero
        $tablero[] = $fila;
    }

    //lo retornamos 
    return $tablero;
}

/*------------------------------------------------------+------------------------------------------------------------------*/

// * Dibujar tablero en HTML *
/* 
lo que hace esto es mostrar la tabla en html y con ayuda de los css que les metemos arriba se ve bonita la tabla, 
esto es para hacerl alegible la tabla
*/
function dibujarTablero($tablero): void {

    echo "<table>"; //Iniciamos la tabla html 

    //mira la linea 176 de ahi sale la $fila, del array tablero entonces lo que hace el bucle recorre las filas del tablero 
    foreach ($tablero as $fila) {

        echo "<tr>"; //abre una nueva fila en la tabla 

        //recorre cada celda de la fila, 
        foreach ($fila as $celda) {
            
            /*imprimimos texto con el "echo", con el "<td>" creamos la celda de la tabla en HTML, la "$celda[1]" seria el color y lo 
            cerramos*/
            echo "<td>" .$celda[1] . "</td>";
        }
        echo "</tr>"; //cierra la fila actual 
    }
    echo "</table>"; //cierra la tabla html
}

/*------------------------------------------------------+------------------------------------------------------------------*/

// * Validar tirada *
/* 
lo que hacemos es comprobar que la tirada esta bien echa 
*/
function tiradaValida($tablero, $fila1, $col1, $fila2, $col2): bool {

    //comprobamos que el origen y el destino no esten en la misma celda
    if ( $fila1 === $fila2 && $col1 === $col2 ){
        return false;
    }
    
    // Comprobamos que las celdas de origen y destino no estén ni en la misma fila ni en la misma columna
    // Si ni las filas ni las columnas son iguales, el movimiento no es válido.
    if ($fila1 !== $fila2 && $col1 !== $col2) {
        // Si las celdas no están ni en la misma fila ni en la misma columna, retornamos false
        // porque el movimiento no puede ser diagonal u otra forma no válida según esta función.
        return false;
    }

    // Obtenemos el valor (la pieza) en la celda de origen
    $origen = $tablero[$fila1][$col1];
    
    // Obtenemos el valor (la pieza) en la celda de destino
    $destino = $tablero[$fila2][$col2];

    // Comprobamos si la pieza de origen está en la misma fila o columna que la pieza de destino
    // Si la pieza de origen y la pieza de destino están en la misma fila (origen[0] == destino[0])
    // o en la misma columna (origen[1] == destino[1]), el movimiento es válido
    if ($origen[0] === $destino[0] || $origen[1] === $destino[1]) {
        // Si las piezas están en la misma fila o columna, retornamos true
        // porque el movimiento es válido (se mueve en línea recta)
        return true;
    }
    
    // Si ninguna de las condiciones anteriores se cumplió, el movimiento no es válido
    return false;
}

/*------------------------------------------------------+------------------------------------------------------------------*/

function tiradaPermitida($fila1, $col1, $fila2, $col2): bool {
    /*
    comprobamos que o la fila origen y destino estan en la fila o columna, si alguna de estas es verdad devolvera true y diagonal
    */
    return $fila1 === $fila2 || $col1 === $col2 || abs($fila1 - $fila2) === abs($col1 - $col2);
}

/*------------------------------------------------------+------------------------------------------------------------------*/

//empesamos a hacer uso de las funciones 

//generamos las combinaciones usando la funcion generarcombinaciones
$combinaciones = generarCombinaciones($numeros,  $colores);

//generamos el tablero con la funcion de generartablero
$tablero = generarTablero($combinaciones);

//guaradmos en una variable global la variable tamblero para poder utilizarla cuadno queramos en est sesion 
$_SESSION['tablero'] = $tablero;

//imprimimos un titulo 
echo "<h3>Tablero Inicial</h3>";

//usando la funcion deibjuamos el tablero 
dibujarTablero($tablero);

// Comprobamos si la solicitud al servidor es de tipo POST.
// Esto se utiliza cuando se envía un formulario (en este caso, con las coordenadas de las celdas).
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

<!-- ------------------------------------------------------+------------------------------------------------------------------ -->
        <form method="post">
            <h3>Introduce las coordenadas</h3>
            <label>Fila inicio:</label>
            <input type="number" name="fila1" min="0" max="3" required>
            <label>Columna inicio:</label>
            <input type="number" name="col1" min="0" max="3" required>
            <label>Fila fin:</label>
            <input type="number" name="fila2" min="0" max="3" required>
            <label>Columna fin:</label>
            <input type="number" name="col2" min="0" max="3" required>
            <button type="submit">Enviar tirada</button>
        </form>
    </body>
</html>
