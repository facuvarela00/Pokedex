<?php

////CONEXIÓN A LA BASE DE DATOS////
$conexion=mysqli_connect("localhost","root","","pokédex");
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}



//// SELECCIONA DEL LISTADO DE POKEMON Y REALIZA LA CONSULTA (SI FALLA TIRA ERROR)////
/*$sql="select * from listado_pokemon";
$result = $conexion->query($sql);

if ($result === false) {
    die("Error en la consulta: " . $conexion->error);
}

////PROCESA LOS RESULTADOS////
$resultAsArray = $result->fetch_all(MYSQLI_ASSOC);

////CERRAR SESIÓN DE LA BD////
$conexion->close();*/

?>