<?php
require_once("usuario.php");
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
var_dump($usuario->consultarUno(1)) ;
?>