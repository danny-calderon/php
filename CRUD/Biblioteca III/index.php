<?php
require_once("class/BiblioManager.php");

// Ejemplo de uso
echo "--- Sistema de Gestión de Libros ---<br><br>";
$manager = new BiblioManager();
echo "AÑADO UN LIBRO<br>";
$manager->addPublication("Cien Años de Soledad", "Gabriel García Márquez", 1967, 157);
$manager->printPublications();

echo "AÑADO UN LIBRO<br>";
$manager->addPublication("20.000", "Julio Verne", 1937, 234);
$manager->printPublications();

echo "ELIMINO UN LIBRO<br>";
$manager->deleteBook(0);
$manager->printPublications();

echo "AÑADO UNA REVISTA<br>";
$manager->addPublication("REVISTA 3", "AUTOR 3", 1967, "Manualidades");
$manager->printPublications();

echo "AÑADO UNA REVISTA<br>";
$manager->addPublication("REVISTA 4", "AUTORA 4", 1937, "cine");
$manager->printPublications();

echo "ELIMINO UNA REVISTA<br>";
$manager->deleteMagazine(0);
$manager->printPublications();
