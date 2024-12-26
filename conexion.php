<?php
class Conexion{
 
    public function __construct(
        String $driver = "mysql",
        String $host = "localhost",
        String $user = "root",
        String $pass = "Lorena30.",
        String $database = "sunny_side",
        String $charset = "utf8",

    ){}
        protected function connect() {
                try{

                }catch(PDOException $mensaje){
                    echo $mensaje->getMessage();
        }
     
}

}
?>