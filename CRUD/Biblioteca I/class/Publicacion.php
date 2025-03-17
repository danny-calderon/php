<?php

class Publicacion {
    private $titulo;
    private $autor;
    private $anyo;
    protected static $jsonFile = 'data.json';

    public function __construct($titulo, $autor, $anyo) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anyo = $anyo;
    }
    public function toArray() {
        return [
            'titulo' => $this->titulo,
            'autor' => $this->autor,
            'anio' => $this->anyo
        ];
    }
    protected static function readJson() {
        if (!file_exists(self::$jsonFile)) {
            return [];
        }
        return json_decode(file_get_contents(self::$jsonFile), true) ?? [];
    }

    protected static function writeJson($data) {
        file_put_contents(self::$jsonFile, json_encode($data, JSON_PRETTY_PRINT));
    }

    public static function getAll() {
        return self::readJson();
    }

    public static function delete($titulo) {
        $data = self::readJson();
        $data = array_filter($data, fn($item) => $item['titulo'] !== $titulo);
        self::writeJson(array_values($data));
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