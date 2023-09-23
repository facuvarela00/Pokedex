<?php
session_start();
?>
<!doctype html>
<html lang="ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/Pokedex/Estilos/estilos.css">
    <title>Pokédex</title>
</head>
<body>
<?php
include_once("header.php");
?>
<main>
    <?php

    include_once ("BD/conectar_a_bd.php");
    include_once ("Funcionalidades/funciones.php");
    $consulta = "SELECT * FROM pokemon";
    $respuesta = $conexion->query($consulta);
    $resultados =  $respuesta->fetch_all(MYSQLI_ASSOC);

    if(isset($_SESSION["usuario"])){
        echo'<br><section class="centrar_boton">
        <button class="boton_añadir"><a  href="Funcionalidades/dar_alta_pokemon.php">Añadir Registro</a></button>
        </section>';
        foreach ( $resultados as $resultado){
           mostrarLogged($resultado);
        }
       }

    else{
        foreach ($resultados as $resultado){
            mostrar($resultado);
        }
    }
    ?>
</main>

<?php
        include_once ("footer.php");
    ?>
</body>
</html>
<?php
include_once("BD/desconectar_de_bd.php");
?>