<?php 
class Conection{
    private $host;
    private $userName;
    private $password;
    private $db;
    protected $conn;
    private $configFile = 'conf.json';

    public function __construct(){
 
        $this->connect();

    }
    public function __destruct(){
 
        if ($this->conn) {

            $this->conn = null;

        }
        
    }
    public function connect(){

        if(!file_exists($this->configFile)){
            die("El archivo de configuración no existe.");
        }
        
        $configData = file_get_contents($this->configFile);
        $config = json_decode($configData, true);

        $this->host = $config['host'];
        $this->userName = $config['userName'];
        $this->password = $config['password'];
        $this->db = $config['db'];
        $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->userName, $this->password); 
    }

    public function getConn(){

        return $this->conn;

    }
}

?>