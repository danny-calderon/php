<?php
class Publicacion {
    private $titulo;
    private $autor;
    private $anyo;

    public function __construct($titulo, $autor, $anyo) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anyo = $anyo;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function getAnyo() {
        return $this->anyo;
    }

    public function setAnyo($anyo) {
        $this->anyo = $anyo;
    }
}
?>