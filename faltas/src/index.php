<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Proyecto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
            // Recibir los datos del formulario
            $num_proyecto = $_POST['numero_proyecto'];
            $producto = $_POST['producto'];
            $cantidad = $_POST['cantidad'];
            $tipo = $_POST['tipo'];

        function formatoproyecto ($num_proyecto){

            if ( $num_proyecto === '/^\d{6}_\d{2}_\d{2}$/'){

            }

        }    
    
    ?>
    <form id="proyectoForm">
        <h2>Faltas de Material</h2>
        
        <label for="numero_proyecto">Número de Proyecto:</label>
        <input type="text" id="numero_proyecto" required>
        
        <label for="producto">Componente:</label>
        <input type="text" id="producto" required>
        
        <label for="cantidad">Cantidad:</label>
        <input type="number" id="cantidad" required>
        
        <label for="tipo">Tipo:</label>
        <select id="tipo">
            <option value="placa">Placa</option>
            <option value="puerta">Puerta</option>
            <option value="envolvente">Envolvente</option>
        </select>
        
        <button type="button" id="guardarBtn">Guardar</button>
    </form>
</body>
</html>
