<?php
require_once("./class/Coche.php");
// Crear una instancia de la clase Coche
$coche = new Coche("Toyota", "Corolla", "Rojo", "Gasolina");

// Mostrar los detalles del coche usando el método describir()
echo $coche->describir();  // Devuelve la descripción completa del coche
?>