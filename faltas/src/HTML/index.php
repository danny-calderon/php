<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Proyecto</title>
    <link rel="stylesheet" href="style.css"> <!-- Enlace al archivo de estilos -->
    <script>
        // Función para resetear el formulario después de cada acción (buscar o guardar)
        function resetFormulario() {
            document.getElementById("proyectoForm").reset(); // Resetea el formulario
        }
    </script>
</head>
<body>
    <!-- Mostrar mensaje de la sesión si existe -->
    <?php
    if (isset($_SESSION['mensaje'])) {
        echo $_SESSION['mensaje'];
        unset($_SESSION['mensaje']);
    }
    ?>
    
    <!-- Formulario HTML para ingresar los datos -->
    <form id="proyectoForm" method="post" action="procesar.php">
        <h2>Faltas de Material</h2>
        
        <!-- Campo para ingresar el número de proyecto -->
        <label for="numero_proyecto">Número de Proyecto:</label>
        <input type="text" id="numero_proyecto" name="numero_proyecto" required>
        
        <!-- Campo para ingresar el componente -->
        <label for="producto">Componente:</label>
        <input type="text" id="producto" name="producto" 
        <?php echo (isset($_POST['accion']) && $_POST['accion'] == 'buscar') ? 'disabled' : 'required'; ?>>
        
        <!-- Campo para ingresar la cantidad -->
        <label for="cantidad">Cantidad:</label>
        <input type="number" id="cantidad" name="cantidad" 
        <?php echo (isset($_POST['accion']) && $_POST['accion'] == 'buscar') ? 'disabled' : 'required'; ?>>
        
        <!-- Campo para seleccionar el tipo de componente -->
        <label for="tipo">Tipo:</label>
        <select id="tipo" name="tipo" 
        <?php echo (isset($_POST['accion']) && $_POST['accion'] == 'buscar') ? 'disabled' : 'required'; ?>>
            <option value="placa">Placa</option>
            <option value="puerta">Puerta</option>
            <option value="envolvente">Envolvente</option>
        </select>
        
        <!-- Botón para enviar el formulario y guardar datos -->
        <button type="submit" name="accion" value="guardar" onclick="resetFormulario()">Guardar</button>
        
        <!-- Botón para buscar un número de proyecto -->
        <button type="submit" name="accion" value="buscar" onclick="resetFormulario()">Buscar</button>
    </form>
</body>
</html>
