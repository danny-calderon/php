<?php
require_once 'Publicacion.php';

class Libro extends Publicacion {
    private $paginas;
    private $genero;

    public function __construct($titulo, $autor, $anyo, $genero, $paginas) {
        parent::__construct($titulo, $autor, $anyo);
        $this->genero = $genero;
        $this->paginas = $paginas;
    }

    public function toArray() {
        $data = parent::toArray();
        $data['genero'] = $this->genero;
        return $data;
    }

    public function save() {
        $data = self::readJson();
        $data[] = $this->toArray();
        self::writeJson($data);
    }
    public function getPaginas() {
        return $this->paginas;
    }

    public function setPaginas($paginas) {
        $this->paginas = $paginas;
    }
}
?>