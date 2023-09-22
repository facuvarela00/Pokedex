<?php

////CONEXIÓN A LA BASE DE DATOS////
$conexion=mysqli_connect("localhost","root","","pokedex");
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

?>