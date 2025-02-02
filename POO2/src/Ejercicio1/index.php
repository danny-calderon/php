<?php 
require_once("./class/Animal.php");
require_once("./class/Perro.php");
require_once("./class/Gato.php");
require_once("./class/Pajaro.php");

$perro = new Perro("Candy",8);
$gato = new Gato("Gabbana",5);
$pajro = new Pajaro("Piolin",2);

$pajro->hacerSonido();
$gato->hacerSonido();
$perro->hacerSonido();
?>