<?php
require_once("crud.php");
class Adopcion extends Crud{

    public function __construct(
        public int $id=0,
        public int $id_animal=0,
        public int $id_usuario=0,
        public int $fecha=0,
        public int $motivo=0,

    ) {
        parent::__construct("adopcion");
       
    }

    public function insertaradocion() {
        // No incluimos el 'id' en la lista de columnas ni en los datos
        $this->crear(
            "id_animal, id_usuario, fecha, motivo",  // Columnas donde no incluimos el 'id'
            "?,?,?,?",                            // Marcadores de posición
        [$this->id_animal, $this->id_usuario, $this->fecha, $this->motivo]  // Datos a insertar
        );
    }

    public function modificarAdopcion() {
        // No incluimos el 'id' en la lista de columnas ni en los datos
        $this->modificacion(
            "id_animal=?, id_usuario=?, fecha=?, motivo=?",  // Columnas donde no incluimos el 'id'                            // Marcadores de posición
        [$this->id_animal, $this->id_usuario, $this->fecha, $this->motivo],  // Datos a insertar
        $this->id
        );
    }

    public function eliminarAdopciop() {
        $this->deleted("$this->id");
    }

    

}


?>