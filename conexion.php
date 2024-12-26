<?php
class Conexion
{
    // Constructor para inicializar las propiedades de la clase
    public function __construct(
        public String $driver = "mysql",
        public String $host = "localhost",
        public String $user = "root",
        public String $pass = "Lorena30.",
        public String $database = "sunny_side",
        public String $charset = "utf8"
    ) {}

    // Método para establecer la conexión
    public function connect()
    {
        try {
          
            $dsn = "$this->driver:host=$this->host;dbname=$this->database;charset=$this->charset";
            $pdo = new PDO($dsn, $this->user, $this->pass);
            
            // Configurar el manejo de errores
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $pdo; 
        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
            return null;
        }
    }
}
?>
