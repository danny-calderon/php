<?php
require_once 'Libro.php';

class Revista extends Libro {
    private $tematica;

    public function __construct($titulo, $autor, $anyo, $paginas, $tematica) {
        parent::__construct($titulo, $autor, $anyo, $paginas);
        $this->tematica = $tematica;
    }

    public function getTematica() {
        return $this->tematica;
    }

    public function setTematica($tematica) {
        $this->tematica = $tematica;
    }
}
?>