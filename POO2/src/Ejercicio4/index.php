<?php
require_once("./class/Bici.php");
// Crear una instancia de la clase Bici
$bici = new Bici("Trek", "Marlin", "Verde", true, 150);

// Mostrar los detalles de la bici
echo $bici->describir() . "<br>";

// Hacer algunos kilómetros
$bici->hacerKms(25);  // Incrementa en 25 km

// Mostrar los detalles después de recorrer los kilómetros
echo $bici->describir();
?>
