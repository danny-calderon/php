<?php 
require_once("Animal.php");

class Perro extends Animal {

    public function hacerSonido(){
       echo $this->nombre . " dice: Guau Guau \n";
    }

}
?>