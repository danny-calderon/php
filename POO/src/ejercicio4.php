<?php 
//me da conflicto el mismo nombre de la clase en el ejercicio2 y este por ese le cambi le nombre
class Average2 {

    //propiedades
    public $num1;
    public $num2;
    public $num3;

    //constructor para inizializar objetos
    public function __construct($num1, $num2, $num3){
        
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->num3 = $num3;

    }

    //metodo
    public function promedio (){

        $resultado = $this->num1 + $this->num2 + $this->num3;
        $resultado = $resultado / 3;
        echo "el promedio es: ". $resultado . "<br>";

    }
}
$average = new Average2(7,8,9);
$average->promedio();
?>