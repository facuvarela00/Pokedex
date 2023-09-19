<!doctype html>
<html lang="ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Estilos/estilos.css">
    <title>Pokédex</title>
</head>
<body>
<header class="contenedor_header">
    <?php
    session_start();

    if(!isset($_SESSION["usuario"]) ){
        include_once("Pokedex/header.php");
    }

    include_once("buscar.php");
    ?>
        <article class="isologo_contenedor">
            <img class="logo_header" src="Imagenes/Otras/pokeball_header.png" alt="Pokeball">
            <h1 class="titulo_header">Pokédex</h1>
        </article>
        <article class="buscador_contenedor">
            <form action="buscar_pokemon.php">
                <label for="busqueda"></label>
                '<input type="text" id="buscador" name="buscador" placeholder="<?php if(isset($_GET["buscador"])){echo $_GET["buscador"];}
                else{echo 'Buscar Pokémon';}?>">
                <input type="submit" id="envio_formulario" name="envio_formulario" value="¿Quién es éste Pokémon?">
            </form>
        </article>
        <article class="login_contenedor">
            <h2>Bienvenido Ash!</h2>
            <form action="Funcionalidades/logout.php" enctype="multipart/form-data" method="POST">
                <input type="submit" value="Cerrar Sesión">
            </form>
        </article>
</header>
<main>
    //SI ENCUENTRO EL POKEMON POR NOMBRE o NUMERO

    //vista pokemon individual

    //SI ENCUENTRO EL POKEMON POR TIPO

    //vista de lista pokemones de ese tipo
</main>

</body>
</html>