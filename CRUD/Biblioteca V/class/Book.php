<?php
require_once("Publication.php");

class Book extends Publication{
    
    private int $pages;

    public function __construct(string $title, string $author, int $year, int $pages){
        parent::__construct($title, $author, $year);
        $this->pages = $pages;
    }

    public function getPages(): int {
        return $this->pages;
    }

    public function setPages(int $pages): void {
        $this->pages = $pages;
    }

    public static function fromArray(array $data): Book {
        return new Book(
            $data['title'] ?? 'Sin título',
            $data['author'] ?? 'Desconocido',
            $data['year'] ?? 0,
            isset($data['pages']) ? (int) $data['pages'] : 100 // Valor predeterminado
        );
    }
    

    public function toArray(): array {
        return [
            'title' => $this->title,
            'author' => $this->author,
            'year' => $this->year, 
            'pages' => $this->pages
        ];
    }

    public function print(){
        parent::print();
        echo "Páginas: $this->pages<br>";
    }




}