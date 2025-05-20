<?php 
// Definimos una función llamada 'autocargador' que se encargará de cargar clases automáticamente
function autocargador($clases){
    // Incluimos el archivo PHP de la clase desde la carpeta 'clases'
    // Por ejemplo, si se pide la clase 'Lamp', cargará 'clases/Lamp.php'
    require_once 'clases/' . $clases . '.php';
}

// Registramos la función 'autocargador' como función de autocarga
// Esto significa que PHP llamará automáticamente a esta función cuando se use una clase que aún no se ha incluido
spl_autoload_register('autocargador');
?>
