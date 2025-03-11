<?php
require_once 'class/Publicacion.php';
require_once 'class/Libro.php';
require_once 'class/Revista.php';

// Crear objetos de la clase Libro
$libro1 = new Libro("El Quijote", "Miguel de Cervantes", 1605, 1000, "Novela");
$libro2 = new Libro("Cien años de soledad", "Gabriel García Márquez", 1967, 400, "Novela");

// Crear objetos de la clase Revista
$revista1 = new Revista("National Geographic", "Varios", 2023, 120, "Ciencia");
$revista2 = new Revista("Time", "Varios", 2023, 80, "Actualidad");

// Mostrar información de los libros
echo "Libro 1: " . $libro1->getTitulo() . ", Autor: " . $libro1->getAutor() . ", Año: " . $libro1->getAnyo() . ", Páginas: " . $libro1->getPaginas() . "<br>";
echo "Libro 2: " . $libro2->getTitulo() . ", Autor: " . $libro2->getAutor() . ", Año: " . $libro2->getAnyo() . ", Páginas: " . $libro2->getPaginas() . "<br>";

// Mostrar información de las revistas
echo "Revista 1: " . $revista1->getTitulo() . ", Autor: " . $revista1->getAutor() . ", Año: " . $revista1->getAnyo() . ", Páginas: " . $revista1->getPaginas() . ", Temática: " . $revista1->getTematica() . "<br>";
echo "Revista 2: " . $revista2->getTitulo() . ", Autor: " . $revista2->getAutor() . ", Año: " . $revista2->getAnyo() . ", Páginas: " . $revista2->getPaginas() . ", Temática: " . $revista2->getTematica() . "<br>";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'] ?? '';
    $autor = $_POST['autor'] ?? '';
    $anio = $_POST['anio'] ?? '';
    $tipo = $_POST['tipo'] ?? '';
    
    if ($tipo === 'libro') {
        $genero = $_POST['genero'] ?? '';
        (new Libro($titulo, $autor, $anio, $genero))->save();
    } elseif ($tipo === 'revista') {
        $edicion = $_POST['edicion'] ?? '';
        (new Revista($titulo, $autor, $anio, $edicion))->save();
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    header('Content-Type: application/json');
    echo json_encode(Publicacion::getAll());
}

if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    parse_str(file_get_contents("php://input"), $_DELETE);
    $titulo = $_DELETE['titulo'] ?? '';
    Publicacion::delete($titulo);
}

?>