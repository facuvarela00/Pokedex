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
include_once("../../header.php");
?>

<main>D
    <?php
    include_once("buscar_pokemon.php");
    include_once("../funciones.php");

    if( isset($_SESSION["usuario"]) ){
        if($pokemonPorNombre!=null){

        mostrarLogged($pokemonPorNombre);
        }else if ($pokemonPorNumero!=null){                 // UN IF POR SI EL USUARIO ESTA LOGGED
        mostrarLogged($pokemonPorNumero);
        }else if($pokemonPorTipo!=null){
        foreach ( $pokemonPorTipo as $pokemon){
        mostrarLogged($pokemon);}
        }else{
        header("Location: /Pokedex/index.php");             // HAY QUE ARREGLAR QUE NOS TRAIGA TODA LA POKEDEX SI NO BUSCAMOS NADA
        exit();
        }}


    else if(!isset($_SESSION["usuario"])){
        if ($pokemonPorNombre!=null){
        mostrar($pokemonPorNombre);}                        // UN ELSE IF POR SI EL USUARIO NO ESTA LOGGED
         else if($pokemonPorNumero!=null){
        mostrar($pokemonPorNumero);}
        else if($pokemonPorTipo!=null){
        foreach ( $pokemonPorTipo as $pokemon){
            mostrar($pokemon);
        };}
        else{
            header("Location: /Pokedex/index.php");             // HAY QUE ARREGLAR QUE NOS TRAIGA TODA LA POKEDEX SI NO BUSCAMOS NADA
            exit();
        };
    }

    ?>
</main>

</body>
</html>