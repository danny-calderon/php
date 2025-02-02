<?php 
class Vehiculo{

    public $marca;
    public $modelo;
    public $color;

    //constructor
    public function __construct($marca = "", $modelo = "", $color = ""){

        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
    }
    
    /**
     * Get the value of marca
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     */
    public function setMarca($marca): self
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get the value of modelo
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     */
    public function setModelo($modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get the value of color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     */
    public function setColor($color): self
    {
        $this->color = $color;

        return $this;
    }

    //Metodo
    public function describir(){

        echo "La marca de este vehiculo es: ".$this->marca."<br>";
        echo "El modelo de este Vehiculo es: ".$this->modelo."<br>";
        echo "El color es: ".$this->color."<br>";

    }
}
?>