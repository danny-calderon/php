<?php

require_once("Vehiculo.php");

class Bici extends Vehiculo {

    // Propiedades
    public $electrica;
    public $kms;

    // Constructor
    public function __construct($marca = "", $modelo = "", $color = "", $electrica = false, $kms = 0) {
        parent::__construct($marca, $modelo, $color);
        $this->electrica = $electrica;
        $this->kms = $kms;
    }

    // Getter y Setter para la propiedad electrica (Tipo)
    public function getElectrica() {
        return $this->electrica;
    }

    public function setElectrica($electrica): self {
        $this->electrica = $electrica;
        return $this;
    }

    // Getter y Setter para la propiedad kms
    public function getKms() {
        return $this->kms;
    }

    public function setKms($kms): self {
        $this->kms = $kms;
        return $this;
    }

    // Método para incrementar los kilómetros
    public function hacerKms($kms) {
        $this->kms += $kms;
    }

    // Sobrescribir el método describir() para incluir la propiedad eléctrica y kms
    public function describir() {
        $electrica = $this->electrica ? "Sí" : "No";
        return parent::describir() . ", Eléctrica: " . $electrica . ", Kilómetros recorridos: " . $this->kms;
    }
}
?>
