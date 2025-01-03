<?php
class Conexion {
    public $driver = 'mysql';
    public $host = 'localhost';
    public $user = 'root';
    public $pass = 'Lorena30.';
    public $dbName = 'sunny_side';
    public $charset = 'utf8';
    public $port = 3307;  // Aquí está el puerto que deseas usar

    protected function conexion()
    {
        try {
            // Agregamos el puerto 3307 a la cadena de conexión
            $pdo = new PDO("{$this->driver}:host={$this->host};port={$this->port};dbname={$this->dbName};charset={$this->charset}", $this->user, $this->pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
?>
