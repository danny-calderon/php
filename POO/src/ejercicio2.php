<?php 
class Average {
    private $num1;
    private $num2;
    private $num3;

    public function setnumeros ($num1, $num2, $num3){

        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->num3 = $num3;

    }

    public function getnum1(){
        return $this->num1;
    }

    public function getnum2(){
        return $this->num2;
    }

    public function getnum3()  {
        return $this->num3;   
    }

    public function calcularpromedio() {

        $suma = $this->num1 + $this->num2 + $this->num3;
        $resultado = $suma / 3;
        echo "El promedio de los tres números es: " . $resultado . "<br>";
    }
}
$average = new Average;
$average->setnumeros(1,2,3);
$average->calcularpromedio();

?>