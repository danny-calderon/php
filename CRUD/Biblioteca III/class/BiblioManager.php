<?php
require_once("Book.php");
require_once("Magazine.php");
// Clase que administra el CRUD de libros
class BiblioManager {
    private array $books = [];
    private array $magazines = [];
    private string $filePath = 'data/data.json';

    public function __construct() {
        $this->loadPublications();
    }

    //Métodos para manejar publicaciones (libros y revistas)
    private function loadPublications(): void {
        if (file_exists($this->filePath)) {
            $data = json_decode(file_get_contents($this->filePath), true);
        }
        if ($data != null && is_array($data)){
            foreach ($data as $array){
                //libro o revista
                if (array_key_exists('pages', $array)){
                    $this->books [] = Book::fromArray($array);
                }
                if (array_key_exists('type', $array)){
                    $this->magazines [] = Magazine::fromArray($array);
                }
                
            }
        }
    }

    public function addPublication(string $title, string $author, int $year, $var): void {
        if (gettype($var) == 'integer'){
            $book = new Book($title, $author, $year, $var);
            $this->books[] = $book;
            $this->saveBooks();
        } else {
            $magazine = new Magazine($title, $author, $year, $var);
            $this->magazines[] = $magazine;
            $this->saveMagazines();
        }
        
    }

    public function printPublications(): void {
        foreach($this->books as $object){
            $object->print();
        }
        foreach($this->magazines as $object){
            $object->print();
        }
    }
    
    //Métodos para manejar libros
    public function readBooks(): array {
        return $this->books;
    }

    public function deleteBook(int $index): void {
        if (isset($this->books[$index])) {
            unset($this->books[$index]);
            $this->books = array_values($this->books);
            $this->saveBooks();
        }
    }

    private function saveBooks(): void {
        $jsonBiblio = [];
        foreach ($this->books as $object){
            $arrayBook = $object->toArray();
            $jsonBiblio[] = $arrayBook;
        }
        $jsonBiblio = json_encode($jsonBiblio, JSON_PRETTY_PRINT);
        file_put_contents($this->filePath, $jsonBiblio);
    }

    public function readMagazines(): array {
        return $this->magazines;
    }

    public function deleteMagazine(int $index): void {
        if (isset($this->magazines[$index])) {
            unset($this->magazines[$index]);
            $this->magazines = array_values($this->magazines);
            $this->saveMagazines();
        }
    }

    

    private function saveMagazines(): void {
        $jsonBiblio = [];
        foreach ($this->magazines as $object){
            $arrayMagazine = $object->toArray();
            $jsonBiblio[] = $arrayMagazine;
        }
        $jsonBiblio = json_encode($jsonBiblio, JSON_PRETTY_PRINT);
        file_put_contents($this->filePath, $jsonBiblio);
    }

    

    /**
     * Get the value of books
     */
    public function getBooks(): array
    {
        return $this->books;
    }

    /**
     * Get the value of magazines
     */
    public function getMagazines(): array
    {
        return $this->magazines;
    }
}