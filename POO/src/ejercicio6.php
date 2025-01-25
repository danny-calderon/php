<?php 
class Matrix {

    //metodos
    private $filas;
    private $columnas;
    private $matriz;

    //constructor
    public function __construct($filas, $columnas){

        $this->filas = $filas;
        $this->columnas = $columnas;

        // Inicializamos la matriz 2D con ceros
        $this->matriz = array_fill(0, $filas, array_fill(0, $columnas, 0));
    
    }
    //obtenemos el numero de filas 
    public function getfilas() {
        
        return $this->filas;
        
    }
    //obtenemos el numero de columnas
    public function getcolumnas()  {

        return $this->columnas;
        
    }
    //establecer los elementos de la matriz en la posición dada (i,j)
    public function setElemento( $i, $j, $valor) {

        if ($i >= 0 && $i < $this->filas && $j >= 0 && $j < $this->columnas){

            $this->matriz [$i][$j] = $valor;

        }else{

            echo "fuera de rango"."<br>";

        }
    }
    //rellenamos con valores aleatorios
    public function RANDOM ($min = 0, $max = 100){

        for ($i = 0; $i < $this->filas; $i++) {
            for ($j = 0; $j < $this->columnas; $j++) {

                $this->matriz[$i][$j] = rand($min, $max);

            }
        }
    }
    //mostrar tabla
    public function mostrar() {
        echo "<table border='1' style='border-collapse: collapse; text-align: center;'>";
        for ($i = 0; $i < $this->filas; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $this->columnas; $j++) {
                echo "<td style='padding: 5px;'>" . $this->matriz[$i][$j] . "</td>";
            }
            echo "</tr>";
        }
        echo "</table><br>";
    }
}
// Crear dos instancias de la clase Matrix con valores aleatorios
$matrix1 = new Matrix(3, 4); // 3 filas y 4 columnas
$matrix1->RANDOM(1, 50);
echo "<h3>Matriz 1:</h3>";
$matrix1->mostrar();

$matrix2 = new Matrix(5, 3); // 5 filas y 3 columnas
$matrix2->RANDOM(10, 99);
echo "<h3>Matriz 2:</h3>";
$matrix2->mostrar();
?>