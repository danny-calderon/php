<?php

// Definición de la clase Lamp (lámpara)
class Lamp {
    // Atributos privados (solo accesibles dentro de la clase)
    private int $id;         // ID único de la lámpara
    private string $name;    // Nombre de la lámpara
    private bool $isOn;      // Estado de la lámpara (true = encendida, false = apagada)
    private string $model;   // Modelo de la lámpara
    private int $wattage;    // Potencia en vatios
    private string $zone;    // Zona donde está ubicada la lámpara

    // Constructor que se ejecuta al crear una nueva instancia de Lamp
    public function __construct(
        int $id,
        string $name,
        bool $isOn,
        string $model,
        int $wattage,
        string $zone
    ) {
        // Asignamos los valores recibidos a los atributos
        $this->id = $id;
        $this->name = $name;
        $this->isOn = $isOn;
        $this->model = $model;
        $this->wattage = $wattage;
        $this->zone = $zone;
    }

    // Métodos "getters" para obtener el valor de cada atributo

    // Devuelve el ID de la lámpara
    public function getId(): int
    {
        return $this->id;
    }

    // Devuelve el nombre de la lámpara
    public function getName(): string
    {
        return $this->name;
    }

    // Devuelve si la lámpara está encendida (true) o apagada (false)
    public function getisOn(): bool
    {
        return $this->isOn;
    }

    // Devuelve el modelo de la lámpara
    public function getModel(): string
    {
        return $this->model;
    }

    // Devuelve la potencia de la lámpara en vatios
    public function getWattage(): int
    {
        return $this->wattage;
    }

    // Devuelve la zona donde está ubicada la lámpara
    public function getZone(): string
    {
        return $this->zone;
    }

    // Método "setter" opcional para cambiar el estado de encendido/apagado
    public function setIsOn(bool $state): void
    {
        $this->isOn = $state;
    }
}
?>
