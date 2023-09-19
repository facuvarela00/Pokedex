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
    session_start();

    include_once("../../header.php");
    ?>

<main>
    <?php
    include_once("buscar_pokemon.php");

    function mostrarPokemon($pokemon){
        echo '<section class="registro_pokemon">';
        echo '<article class="col_icono_pokemon">';
        echo '<img class="icono_pokemon_registro" src="/Pokedex/Imagenes/Otras/pokeball_registro.png">';
        echo '</article>';
        echo '<article class="col_data">';
        echo '<h2 class="mostrar_id_pokemon">#'.$pokemon["id"].'</h2><br>';
        echo '<h2 class="mostrar_nombre_pokemon">'.$pokemon['nombre'].'</h2><br>';
        echo '<img class="mostrar_tipo_pokemon" src="/Pokedex/Imagenes/Tipo/'.$pokemon['tipo'].'">';
        echo '</article>';
        echo '<article class="col_imagen_poke">';
        echo '<img class="mostrar_imagen_pokemon" src="/Pokedex/Imagenes/Pokemon/'.$pokemon['imagen'].'" alt="">';
        echo '</article>';
        echo '<article class="col_modificaciones">';
        echo '<a class="imagen_modificar" href="#"></a>';
        echo '<a class="imagen_eliminar" href="#"></a>';
        echo '</article>';
        echo '</section>';
    };


    if($pokemonPorNombre!=null){
        mostrarPokemon($pokemonPorNombre);

    }else if($pokemonPorNumero!=null){
        mostrarPokemon($pokemonPorNumero);
    }
    else if($pokemonPorTipo!=null){
        foreach ( $pokemonPorTipo as $pokemon){
            mostrarPokemon($pokemon);
        };
    }else{
        header("Location: /Pokedex/index.php");
        exit();
    };
    ?>
</main>

</body>
</html>
