<?php 
class Articulo {
    //propiedades
    public $nombre;
    public $material;
    public $precio;

    //getters y setters
        public function setnombre ($nombre){
            $this->nombre = $nombre;
        }
        public function setmaterial ($material){
            $this->material = $material;
        }
        public function setprecio ($precio){
            $this->precio = $precio;
        }
        public function getnombre(){
            return $this->nombre;
        }
        public function getmaterial(){
            return $this->material;
        }
        public function getprecio(){
            return $this->precio;
        }
    //metodo descuento
    public function descuento($descuento)  {
        
        $decuento = $this->getprecio() * ($descuento/100);
        $resultado = $this->getprecio() - $decuento;
        echo "el precio con el descuento aplicado es: ". $resultado . "</br>";
    }
}
//prueba
$articulo = new Articulo;
$articulo->setnombre("PC");
$articulo->setmaterial("aluminio");
$articulo->setprecio(100);
$articulo->descuento(20);

?>