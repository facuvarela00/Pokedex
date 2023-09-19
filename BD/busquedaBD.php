<?php

/* consultas a BD
$sql = "select * from pokemon";
$result = $conexion->query($sql);
$resultAsArray = $result->fetch_all(MYSQLI_ASSOC);*/

function buscarPokemonPorNombre($nombre){
    $conexion = new mysqli("localhost", "root", "", "pokedex");
    $sql1="select * from pokemon where nombre like '$nombre' ";
    $result = $conexion->query($sql1);
    $resultAsArray = $result->fetch_array(MYSQLI_ASSOC);
    return $resultAsArray;
}
function buscarPokemonPorTipo($tipo){
    $conexion = new mysqli("localhost", "root", "", "pokedex");
    $sql1="select * from pokemon where tipo like '$tipo.png' ";
    $result = $conexion->query($sql1);
    $resultAsArray = $result->fetch_all(MYSQLI_ASSOC);
    return $resultAsArray;
}
function buscarPokemonPorNumero($num){
    $conexion = new mysqli("localhost", "root", "", "pokedex");
    $sql1="select * from pokemon where id ='$num'";
    $result = $conexion->query($sql1);
    $resultAsArray = $result->fetch_all(MYSQLI_ASSOC);
    return $resultAsArray;
}
?>