<?php 
     class Triangle {
        //propiedades
        public $a;
        public $b;
        public $c;

    //Esto es parte de la formula Heron, no lo tiene que ver nadie por eso es privada
        private function s(){
            
            $resultado = $this->a + $this->b + $this->c;
            $resultado = $resultado / 2;
            return $resultado;

        }
 
    //El area usando el metodo de Heron
        public function area(){

            //mostramos las medidas del triangulo
            echo "a".$this->a ."b".$this->b."c".$this->c."<br>";

            $s = $this->s();
            $area = sqrt($s * ($s - $this->a) * ($s - $this->b) * ($s - $this->c));
            
            // Retornamos o mostramos el área
            echo "Área: " . $area . "<br>";
            return $area;
        }

    //El perimetro del triangulo
        public function perimetro()  {
            
           //se pueden declarar en la misma operacion, es por gusto propio 
           $a = $this-> a;
           $b = $this-> b;
           $c = $this-> c;

           //operación
            $perimetro = $a + $b + $c;

            // Retornamos o mostramos el perimetro
            echo "Área: " . $perimetro . "<br>";
            return $perimetro;
        }

    }

    $Triangle = new Triangle;
    $Triangle->a = 5;
    $Triangle->b = 6;
    $Triangle->c = 7;

        echo "Perimetro:". $Triangle->perimetro() ."<br>";
        echo "Area:". $Triangle->area() ."<br>";

?>