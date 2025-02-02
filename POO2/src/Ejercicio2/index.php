<?php 
require_once("./class/FacturaElectronica.php");

$cliente = new Factura(1,"Danny","1000");
$cliente->mostrarDetalles();

$cliente2 = new FacturaElectronica(2,"Alvaro",2000,"alvaropardo@gmail.com");
$cliente2->mostrarDetalles();
$cliente2->enviarEmail();
?>