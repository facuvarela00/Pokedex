<?php
session_start();
if( !isset($_SESSION["usuario"]) ){
    header("location:index.php");
    exit();
}
?>

<?php
$id=$_GET["id"];
$nombre=$_GET["nombre"];
$tipo=$_GET["tipo"];
$descripcion=$_GET["descripcion"];
$imagen=$_GET["imagen"];
?>

<?php
include_once("../../BD/conectar_a_bd.php");
?>

<?php

$sql = "DELETE FROM pokemon WHERE id= '$id'";
$result= mysqli_query($conexion, $sql);
if ($result) {
    header('Location: ../../index.php');
} else {
    echo 'No se pudo eliminar el Pokemon'. mysqli_error($conexion);;
}
mysqli_close($conexion);
?>



