<?php
require_once("crud.php");
 class Animal extends Crud{

    public function __construct(
        public int $id=0,
        public string $nombre= "",
        public string $raza= "",
        public string $sexo= "",
        public string $color="",
        public int $edad= 0,
    ) {
        parent::__construct("animal"); 
    }
    public function insertarAnimal(){
        $this->crear("nombre,raza,sexo,color,edad",
        "?,?,?,?,?",
        [$this->nombre,$this->raza,$this->sexo,$this->color,$this->edad]);

    }

    public function updatearAnimal(){
        $this->modificacion("nombre,raza,sexo,color,edad",
        [$this->nombre,$this->raza,$this->sexo,$this->color,$this->edad],
        $this->id,
    );
    }
    public function deletearAnimal(){
       $this->deleted($this->id);
    }

 }

?>