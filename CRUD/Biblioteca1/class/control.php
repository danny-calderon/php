<?php
require_once 'Libro.php';

class Control {
    private $libros = [];

    public function crearLibro($titulo, $autor, $anyo, $paginas) {
        $nuevoLibro = new Libro($titulo, $autor, $anyo, $paginas);
        $this->libros[] = $nuevoLibro;
        return "Libro agregado correctamente.";
    }

    public function leerLibros() {
        return $this->libros;
    }

    public function actualizarLibro($index, $titulo, $autor, $anyo, $paginas) {
        if (isset($this->libros[$index])) {
            $this->libros[$index]->setTitulo($titulo);
            $this->libros[$index]->setAutor($autor);
            $this->libros[$index]->setAnyo($anyo);
            $this->libros[$index]->setPaginas($paginas);
            return "Libro actualizado correctamente.";
        }
        return "Libro no encontrado.";
    }

    public function eliminarLibro($index) {
        if (isset($this->libros[$index])) {
            unset($this->libros[$index]);
            $this->libros = array_values($this->libros); // Reorganiza los índices
            return "Libro eliminado correctamente.";
        }
        return "Libro no encontrado.";
    }
}
