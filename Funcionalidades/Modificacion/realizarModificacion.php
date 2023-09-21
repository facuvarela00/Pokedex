<?php
session_start();

if( !isset($_SESSION["usuario"]) ) {
    header("location:index.php");
    exit();
}
?>

<!doctype html>
<html lang="es
">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/Pokedex/Estilos/estilos.css">
    <title>RealizarModificacion</title>
</head>
<body>
<header>
    <?php
    include_once("../../header.php");
    ?>
</header>
<main>
    <?php
    $idOld=$_POST["idOld"];
    $idNew = isset($_POST["idNew"]) ? $_POST["idNew"] : "";
    $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
    $tipo = isset($_POST["tipos"]) ? $_POST["tipos"].".png" : "";
    $descripcion = isset($_POST["descripcion"]) ? $_POST["descripcion"] : "";
    $imagen=$_POST["imagen"];



    ?>

    <?php
    include_once ("../../BD/conectar_a_bd.php");
    ?>

    <?php
    $sql = "UPDATE pokemon SET id='$idNew', nombre='$nombre', tipo='$tipo', descripcion='$descripcion', imagen= '$imagen' WHERE id='$idOld' ";

    $result = mysqli_query($conexion, $sql);
    if ($result) {
        header('Location: ../../index.php');
    } else {
        echo 'No se pudo modificar el Pokemon'. mysqli_error($conexion);
    }
    mysqli_close($conexion);
    ?>

</main>

</body>
</html>
