<?php
require_once 'Publicacion.php';

class Libro extends Publicacion {
    private $paginas;

    public function __construct($titulo, $autor, $anyo, $paginas) {
        parent::__construct($titulo, $autor, $anyo);
        $this->paginas = $paginas;
    }

    public function getPaginas() {
        return $this->paginas;
    }

    public function setPaginas($paginas) {
        $this->paginas = $paginas;
    }
}
?>