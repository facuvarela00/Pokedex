<?php
session_start();

if( !isset($_SESSION["usuario"]) ){
    header("location:../index.php");
    exit();
}
$usuario = $_SESSION["usuario"];

include_once("../BD/conectar_a_bd.php");

$carpetaContenedora= $_SERVER['DOCUMENT_ROOT'] . "/Pokédex/Imagenes/Pokemon/";

$id = isset($_POST["id"]) ? $_POST["id"] : "";
$nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
$tipo = isset($_POST["tipos"]) ? $_POST["tipos"].".png" : "";
$descripcion = isset($_POST["descripcion"]) ? $_POST["descripcion"] : "";
$imagen = isset($_FILES["imagen"]["name"]) ? $_FILES["imagen"]["name"] : "";
/* = isset($_POST["tipos"]) ? "../Imagenes/Tipo/".$_POST["tipos"].".png" : "";
$imagen = isset($_FILES["imagen"]["name"]) ? "../Imagenes/Pokemon/".$_FILES["imagen"]["name"] : "";*/



$consulta="INSERT INTO pokemon(id, nombre, tipo, descripcion, imagen) VALUES ('$id','$nombre','$tipo','$descripcion','$imagen')";

$resultado_consulta=mysqli_query($conexion,$consulta);
if($resultado_consulta){
    header("Location:../index_logged.php");
}else{
    echo "Error al realizar la consulta";
}

mysqli_close($conexion);
?>