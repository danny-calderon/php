<?php
require_once 'Libro.php';

class Revista extends Libro {
    private $tematica;
    private $edicion;

    public function __construct($titulo, $autor, $anio, $edicion, $tematica) {
        parent::__construct($titulo, $autor, $anio);
        $this->edicion = $edicion;
        $this->tematica = $tematica;
    }

    public function toArray() {
        $data = parent::toArray();
        $data['edicion'] = $this->edicion;
        return $data;
    }

    public function save() {
        $data = self::readJson();
        $data[] = $this->toArray();
        self::writeJson($data);
    }

    public function getTematica() {
        return $this->tematica;
    }

    public function setTematica($tematica) {
        $this->tematica = $tematica;
    }
}
?>