<?php

class Lamp {
    // Atributos
    // id, nombre, encendido (boolean), modelo, potencia (watt), zona   
    private int $id;
    private string $name;
    private bool $isOn;
    private string $model;
    private int $wattage;
    private string $zone;

    // Constructor
    public function __construct(
        int $id,
        string $name,
        bool $isOn,
        string $model,
        int $wattage,
        string $zone
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->isOn = $isOn;
        $this->model = $model;
        $this->wattage = $wattage;
        $this->zone = $zone;
    }

    // Getters
    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getisOn(): bool
    {
        return $this->isOn;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function getWattage(): int
    {
        return $this->wattage;
    }

    public function getZone(): string
    {
        return $this->zone;
    }

    // Setter opcional para cambiar el estado de encendido/apagado
    public function setIsOn(bool $state): void
    {
        $this->isOn = $state;
    }
}
?>
