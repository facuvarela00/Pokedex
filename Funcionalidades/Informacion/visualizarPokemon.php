<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokémon</title>
    <link rel="stylesheet" href="/Pokedex/Estilos/estilos.css">
    <link rel="stylesheet" href="/Pokedex/Estilos/estilosPokemon.css">
</head>
<body>
    <header>
    <?php
        include_once $_SERVER['DOCUMENT_ROOT'] . '/Pokedex/header.php';
    ?>
    </header>
    
    <main>

        <?php

        $id=$_GET["id"];
        $nombre=$_GET["nombre"];
        $tipo=$_GET["tipo"];
        $descripcion=$_GET["descripcion"];
        $imagen=$_GET["imagen"];

        echo'
             <div class="tarjeta">
             <div class="imagenPokemon">';
        echo'<img src="/Pokedex/Imagenes/Pokemon/'.$imagen.'" alt="Pokemon">';
        echo'</div>
             <div class="info">';
        echo '<h1 class="datos">Nombre<br>'.$nombre.'</h1>';
        echo '<h2 class="datos2">'.$id.'</h2>';
        echo '<h3 class="datos">Tipo</h3> <h5 class="datos2"><img  class="mostrar_tipo_pokemon" src="/Pokedex/Imagenes/Tipo/'.$tipo.'" alt="Pokemon">'.'</h5>';
        echo ' <h3 class="datos">Descripción</h3> <h5 class="datos2">'.$descripcion.'.</h5>';
        echo '</div>
             </div>';
        ?>

   <!-- <div class="tarjeta">
        <div class="imagenPokemon">
        <img src="/Pokedex/Pikachu.png" alt="Pokemon">
        </div>
        <div class="info">

            <h1 class="datos">Nombre: Pikachu</h1>
            <h2 class="datos2">N°25</h2>
            <h3 class="datos">Tipo: </h3> <h5 class="datos2">Eléctrico</h5>
            <h3 class="datos">Descripción: </h3> <h5 class="datos2">Cuando se enfada, este Pokémon descarga la energía que almacena en el interior de las bolsas de las mejillas.</h5>
        </div>
    </div>-->

    </main>

    <footer>
    <?php
        include_once $_SERVER['DOCUMENT_ROOT'] . '/Pokedex/footer.php';    
    ?>
    </footer>
</body>
</html>