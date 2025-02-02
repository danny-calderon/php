<?php 
require_once("Animal.php");

class Pajaro extends Animal {

    public function hacerSonido(){
        echo $this->nombre . " dice: Pio Pio \n";
    }

}
?>