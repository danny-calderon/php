<?php 
require_once("Factura.php");

class FacturaElectronica extends Factura {
    public $emailCliente;

    // Constructor
    public function __construct($numfactura = 0, $client = "", $price = 0, $emailCliente = "") {
        parent::__construct($numfactura, $client, $price);
        // Asignar el valor del emailCliente al atributo de la clase
        $this->emailCliente = $emailCliente;
    }

    // Getter y Setter para $emailCliente
    public function getEmailCliente() {
        return $this->emailCliente;
    }

    public function setEmailCliente($emailCliente) {
        $this->emailCliente = $emailCliente;
    }

    // Método para simular el envío de un correo electrónico
    public function enviarEmail() {
        // Usar $this para acceder a la propiedad emailCliente
        echo "Correo enviado a " . $this->emailCliente . "<br>";
        echo "Correo enviado exitosamente<br>";
    }

    // Sobreescribir el método mostrarDetalles() si es necesario
    public function mostrarDetalles() {
        parent::mostrarDetalles();
        echo "Email del cliente: " . $this->emailCliente . "<br>";
    }
}
?>
