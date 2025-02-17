<?php
require_once 'Control.php';

$control = new Control();

// Agregar libros
$control->crearLibro("El Quijote", "Miguel de Cervantes", 1605, 1000);
$control->crearLibro("Cien años de soledad", "Gabriel García Márquez", 1967, 400);

// Listar libros
$libros = $control->leerLibros();

echo "<h2>Lista de Libros</h2>";
foreach ($libros as $index => $libro) {
    echo "<p><strong>Título:</strong> " . $libro->getTitulo() . " | <strong>Autor:</strong> " . $libro->getAutor() . " | <strong>Año:</strong> " . $libro->getAnyo() . " | <strong>Páginas:</strong> " . $libro->getPaginas() . "</p>";
}

// Actualizar un libro (ejemplo: actualizar el primer libro)
$control->actualizarLibro(0, "Don Quijote de la Mancha", "Miguel de Cervantes", 1605, 1100);

// Eliminar un libro (ejemplo: eliminar el segundo libro)
$control->eliminarLibro(1);

// Mostrar lista después de actualizar y eliminar
$libros = $control->leerLibros();

echo "<h2>Lista de Libros Actualizada</h2>";
foreach ($libros as $index => $libro) {
    echo "<p><strong>Título:</strong> " . $libro->getTitulo() . " | <strong>Autor:</strong> " . $libro->getAutor() . " | <strong>Año:</strong> " . $libro->getAnyo() . " | <strong>Páginas:</strong> " . $libro->getPaginas() . "</p>";
}
?>
