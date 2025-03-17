<?php
require_once("Publication.php");

class Magazine extends Publication{
    
    private string $type;

    public function __construct(string $title, string $author, int $year, string $type){
        parent::__construct($title, $author, $year);
        $this->type = $type;
    }

    public function getType(): string {
        return $this->type;
    }

    public function setType(string $type): void {
        $this->type = $type;
    }

    public static function fromArray(array $data): Magazine {
        return new Magazine($data['title'], $data['author'], $data['year'], $data['type']);
    }

    public function toArray(): array {
        return [
            'title' => $this->title,
            'author' => $this->author,
            'year' => $this->year, 
            'type' => $this->type
        ];
    }

    public function print(){
        parent::print();
        echo "Tipo: $this->type<br>";
    }

}