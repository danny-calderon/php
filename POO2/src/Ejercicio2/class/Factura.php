<?php 
class Factura{

    public $numeroFactura;
    public $cliente;
    public $monto;
    
    //constructor
    public function __construct($numfactura=0,$client="",$price=0){

        $this->numeroFactura = $numfactura;
        $this->cliente = $client;
        $this->monto = $price;
    }
     // Getters y Setters
     public function getNumeroFactura() {
        return $this->numeroFactura;
    }

    public function setNumeroFactura($numeroFactura) {
        $this->numeroFactura = $numeroFactura;
    }

    public function getCliente() {
        return $this->cliente;
    }

    public function setCliente($cliente) {
        $this->cliente = $cliente;
    }

    public function getMonto() {
        return $this->monto;
    }

    public function setMonto($monto) {
        $this->monto = $monto;
    }
    //Metodo
    public function mostrarDetalles(){

        echo "El numero de la factura es: ".$this->numeroFactura."<br>";
        echo "El nombre del cliente es: ".$this->cliente."<br>";
        echo "el monto es: ".$this->monto."<br>";

    }
}
?>