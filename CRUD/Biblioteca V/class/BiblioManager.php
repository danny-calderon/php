<?php
require_once("Book.php");
require_once("Magazine.php");

// Clase que administra el CRUD de libros y revistas
class BiblioManager {
    private array $books = [];
    private array $magazines = [];
    private string $filePath = 'data/data.json';

    public function __construct() {
        $this->loadPublications();
    }

    // Cargar libros y revistas desde el archivo JSON
    private function loadPublications(): void {
        if (file_exists($this->filePath)) {
            $data = json_decode(file_get_contents($this->filePath), true);
            if ($data && is_array($data)) {
                foreach ($data as $array) {
                    if (isset($array['type'])) {
                        if ($array['type'] === "book") {
                            $this->books[] = Book::fromArray($array);
                        } elseif ($array['type'] === "magazine") {
                            $this->magazines[] = Magazine::fromArray($array);
                        }
                    }
                }
            }
        }
    }
    

    // Añadir una nueva publicación
    public function addPublication(string $title, string $author, int $year, $var): void {
        if (is_int($var)) {
            $this->books[] = new Book($title, $author, $year, $var);
        } else {
            $this->magazines[] = new Magazine($title, $author, $year, $var);
        }
        $this->savePublications();
    }

    // Leer libros
    public function getBooks(): array {
    return array_filter($this->books, function($book) {
        return $book instanceof Book; // Filtra solo objetos de la clase Book
    });
}


    // Leer revistas
    public function getMagazines(): array {
        return $this->magazines;
    }

    // Eliminar libro por índice
    public function deleteBook(int $index): void {
        if (isset($this->books[$index])) {
            unset($this->books[$index]);
            $this->books = array_values($this->books);
            $this->savePublications();
        }
    }

    // Eliminar revista por índice
    public function deleteMagazine(int $index): void {
        if (isset($this->magazines[$index])) {
            unset($this->magazines[$index]);
            $this->magazines = array_values($this->magazines);
            $this->savePublications();
        }
    }

    // Eliminar cualquier publicación por ID y tipo
    public function deleteItem(int $id, string $type): void {
        if ($type === "book") {
            $this->books = array_filter($this->books, fn($item) => $item->getId() !== $id);
        } elseif ($type === "magazine") {
            $this->magazines = array_filter($this->magazines, fn($item) => $item->getId() !== $id);
        }
        $this->savePublications();
    }

    // Guardar todas las publicaciones en JSON
    private function savePublications(): void {
        $jsonBiblio = array_merge(
            array_map(fn($book) => $book->toArray(), $this->books),
            array_map(fn($magazine) => $magazine->toArray(), $this->magazines)
        );
        file_put_contents($this->filePath, json_encode($jsonBiblio, JSON_PRETTY_PRINT));
    }
}
