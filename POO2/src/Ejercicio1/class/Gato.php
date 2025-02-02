<?php 
require_once("Animal.php");

class Gato extends Animal {

    public function hacerSonido(){
       echo $this->nombre . " dice: Miauuu \n";
    }

}
?>