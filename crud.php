<?php
require_once("conexion.php");
class crud extends Conexion{
    private $pdo; 

    public function __construct(
        public String $tabla,

    ){
    
    $this->pdo->$this->conexion();
    }

    public function consultarTodo(){
          try{

            $stm =$this->pdo->prepare("SELECT * FROM $this->tabla");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
          } catch(PDOException $mensaje){
            echo $mensaje->getMessage();
}
    }

    public function consultaruno(int $id ){
       
            try{
  
              $stm =$this->pdo->prepare("SELECT * FROM $this->tabla WHERE id=?");
              $stm->execute([ $id]);
              return $stm->fetch(PDO::FETCH_OBJ);
            } catch(PDOException $mensaje){
              echo $mensaje->getMessage();
  }
      }
      public function delete(int $id){
        try{
  
            $stm =$this->pdo->prepare("DELETE  FROM $this->tabla WHERE id=?");
            $stm->execute([ $id]);
          } catch(PDOException $mensaje){
            echo $mensaje->getMessage();
}
      }

      public function crear(String  $columnas,string $marcadores,array $datos){
        $stm =$this->pdo->prepare("INSERT INTO $this->tabla $columnas values $marcadores");
        $stm->execute($datos);
      }

      public function modificacion(String  $columnas,array $datos){
        $stm =$this->pdo->prepare("UPDATE INTO $this->tabla $columnas ");
        $stm->execute($datos);
      }


    }

   

?>