<?php
require_once 'class/Publicacion.php';
require_once 'class/Libro.php';
require_once 'class/Revista.php';

// Crear objetos de la clase Libro
$libro1 = new Libro("El Quijote", "Miguel de Cervantes", 1605, 1000);
$libro2 = new Libro("Cien años de soledad", "Gabriel García Márquez", 1967, 400);

// Crear objetos de la clase Revista
$revista1 = new Revista("National Geographic", "Varios", 2023, 120, "Ciencia");
$revista2 = new Revista("Time", "Varios", 2023, 80, "Actualidad");

// Mostrar información de los libros
echo "Libro 1: " . $libro1->getTitulo() . ", Autor: " . $libro1->getAutor() . ", Año: " . $libro1->getAnyo() . ", Páginas: " . $libro1->getPaginas() . "<br>";
echo "Libro 2: " . $libro2->getTitulo() . ", Autor: " . $libro2->getAutor() . ", Año: " . $libro2->getAnyo() . ", Páginas: " . $libro2->getPaginas() . "<br>";

// Mostrar información de las revistas
echo "Revista 1: " . $revista1->getTitulo() . ", Autor: " . $revista1->getAutor() . ", Año: " . $revista1->getAnyo() . ", Páginas: " . $revista1->getPaginas() . ", Temática: " . $revista1->getTematica() . "<br>";
echo "Revista 2: " . $revista2->getTitulo() . ", Autor: " . $revista2->getAutor() . ", Año: " . $revista2->getAnyo() . ", Páginas: " . $revista2->getPaginas() . ", Temática: " . $revista2->getTematica() . "<br>";
?>