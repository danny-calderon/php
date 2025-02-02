<?php 
require_once("Vehiculo.php");

class Coche extends Vehiculo{

    //propiedades
    public $tipoCombustible;

    //constructor
    public function __construct($marca = '', $modelo = '', $color = '', $tipoCombustible = ""){

        parent::__construct($marca,$modelo,$color);
        $this->tipoCombustible = $tipoCombustible;

    }

    /**
     * Get the value of tipoCombustible
     */
    public function getTipoCombustible()
    {
        return $this->tipoCombustible;
    }

    /**
     * Set the value of tipoCombustible
     */
    public function setTipoCombustible($tipoCombustible): self
    {
        $this->tipoCombustible = $tipoCombustible;

        return $this;
    }

    //metodos
    public function describir(){

        return parent::describir(). "el tipo de combustible es: ".$this->tipoCombustible."<br>";

    }
}
?>