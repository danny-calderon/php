<?php 
class Animal{

    public $nombre;
    public $edad;

    public function __construct($name="", $age=0){

        $this->nombre = $name;
        $this->edad = $age;

    }
    public function hacerSonido(){

        echo "hace...";
        
    }
}
?>