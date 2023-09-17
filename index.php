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
<header>
    <?php
    session_start();

    if(isset($_SESSION["usuario"]) ){
        header("Location:index_logged.php");
    }else{
        include_once("header.php");
        exit();
    }
    ?>

</header>
<main>
    <button class="boton_añadir"><a href="Funcionalidades/dar_alta_pokemon.php">Añadir Registro</a></button>
</main>

</body>
</html>