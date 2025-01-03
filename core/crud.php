<?php
require_once("core/conexion.php");

class Crud extends Conexion {
    private $pdo;
    private $tabla;

    // El constructor ya no recibe tabla, ya que la clase Conexion maneja la conexión
    public function __construct(string $tabla) {
        $this->tabla = $tabla;  // Asignamos la tabla
        $this->pdo = $this->conexion();  // Establecemos la conexión a la base de datos
    }

    // Método para consultar todos los registros de la tabla
    public function consultarTodo() {
        try {
            $stm = $this->pdo->prepare("SELECT * FROM {$this->tabla}");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $mensaje) {
            echo $mensaje->getMessage();
        }
    }

    // Método para consultar un solo registro por su ID
    public function consultarUno(int $id) {
        try {
            $stm = $this->pdo->prepare("SELECT * FROM {$this->tabla} WHERE id = ?");
            $stm->execute([$id]);
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $mensaje) {
            echo $mensaje->getMessage();
        }
    }

    // Método para eliminar un registro por su ID
    public function deleted(int $id) {
        try {
            $stm = $this->pdo->prepare("DELETE FROM {$this->tabla} WHERE id = ?");
            $stm->execute([$id]);
        } catch (Exception $mensaje) {
            echo $mensaje->getMessage();
        }
    }

    // Método para crear un nuevo registro
    public function crear(string $columnas, string $marcadores, array $datos) {
        try {
            $stm = $this->pdo->prepare("INSERT INTO {$this->tabla} ($columnas) VALUES ($marcadores)");
            $stm->execute($datos);

            if ($stm->rowCount() > 0) {
                echo "Inserción exitosa.";
            } else {
                echo "Error al insertar.";
            }
        } catch (Exception $mensaje) {
            echo "Error al insertar: " . $mensaje->getMessage();
        }
    }

    // Método para modificar un registro
    public function modificacion(string $columnas, array $datos, int $id) {
        try {
            $datos[] = $id;  // El id se pasa aquí como parte del arreglo de datos
            $stm = $this->pdo->prepare("UPDATE {$this->tabla} SET $columnas WHERE id = ?");
            $stm->execute($datos);
            echo "Registro actualizado correctamente.";
        } catch (Exception $mensaje) {
            echo "Error al modificar: " . $mensaje->getMessage();
        }
    }
}
?>
