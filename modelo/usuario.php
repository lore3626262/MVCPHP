<?php 
require_once("core/crud.php");

class Usuario extends crud {
    public function __construct(
        public int $id = 0,           // Aunque el id está declarado, no lo usaremos al insertar
        public string $nombre = "",
        public string $apellido = "",
        public string $telefono = "",
        public int $edad = 0
    ) {
        parent::__construct("usuario");  // Asegúrate de que "usuario" es el nombre correcto de la tabla
    }

    public function insertar() {
        // No incluimos el 'id' en la lista de columnas ni en los datos
        $this->crear(
            "nombre, apellido, telefono, edad",  // Columnas donde no incluimos el 'id'
            "?,?,?,?",                            // Marcadores de posición
            [$this->nombre, $this->apellido, $this->telefono, $this->edad]  // Datos a insertar
        );
    }
    public function actualizar() {
        // Asegúrate de que $this->id esté definido en el objeto
        $this->modificacion(
            "nombre=?, apellido=?, telefono=?, edad=?",
            [$this->nombre, $this->apellido, $this->telefono, $this->edad],
            $this->id  // Pasar el id del registro a actualizar
        );
    }

    public function eliminar() {
        $this->deleted($this->id);

    }

    
}
?>
