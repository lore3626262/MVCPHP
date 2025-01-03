<?php
require_once("usuario.php");
require_once("animal.php");
require_once("adopcion.php");
$usuario=new usuario(
    2,
    "sara",
    "Martinez",
    "3163386786",
    30


);

//$usuario->insertar();
//$usuario->actualizar();
//$usuario->eliminar() ;
//var_dump($usuario->consultarTodo()) ;
//var_dump($usuario->consultarUno(1)) ;
$animal=new Animal(
    2,
    "Celeste",
    "raddoll",
    "f",
    "being",
    2

);

//$animal->insertarAnimal() ;
//$animal->updatearAnimal()
//$animal->deletearAnimal();
//var_dump($animal->consultarTodo());
//var_dump($animal->consultarUno(1));

$adopcion=new Adopcion(
    3,
    1,
    1,
    10022021,
    5,
);
//$adopcion->insertaradocion();
//$adopcion->modificarAdopcion();
//$adopcion->eliminarAdopciop();
//var_dump($adopcion->consultarTodo());
var_dump($adopcion->consultarUno(2));




?>