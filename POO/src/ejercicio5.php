<?php 
class Empleado{
    //propiedades
    public $nombre;
    public $salario;
    public $horasDia;

    //constructor
    public function __construct($nombre, $salario, $horasDia){

        $this->nombre = $nombre;
        $this->salario = $salario;
        $this->horasDia = $horasDia;
    }
    
    //metodos
    public function getInfo(){

        echo "Nombre: ". $this->nombre . "<br>";
        echo "Salario: ". $this->salario . "<br>";
        echo "H oras diarias: ". $this->horasDia . "<br>";

    }
    public function AddSal(){

        if ($this->salario < 500 ){

            $this->salario += 10;
        }
    }
    public function AddWork(){

        if ($this->horasDia > 6){

            $this->salario += 5;

        }
    }
}

// Empleado 1
$empleado1 = new Empleado("Juan", 450, 8);
$empleado1->AddSal();
$empleado1->AddWork();
echo $empleado1->getInfo();

// Empleado 2
$empleado2 = new Empleado("María", 600, 7);
$empleado2->AddSal();
$empleado2->AddWork();
echo $empleado2->getInfo();

// Empleado 3
$empleado3 = new Empleado("Pedro", 480, 5);
$empleado3->AddSal();
$empleado3->AddWork();
echo $empleado3->getInfo();

?>