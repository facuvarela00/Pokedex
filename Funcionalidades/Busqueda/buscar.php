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
include_once ("header_buscar.php");
?>

<main>
    <?php
    include_once("buscar_pokemon.php");
    include_once("../funciones.php");

    if( isset($_SESSION["usuario"]) ){
        if($pokemonPorNombre!=null){

        mostrarLogged($pokemonPorNombre);
        }else if ($pokemonPorNumero!=null){
        mostrarLogged($pokemonPorNumero);
        }else if($pokemonPorTipo!=null){
        foreach ( $pokemonPorTipo as $pokemon){
        mostrarLogged($pokemon);}
        }else{
        header("Location: /Pokedex/index.php");
        exit();
        }}


    else if(!isset($_SESSION["usuario"])){
        if ($pokemonPorNombre!=null){
        mostrar($pokemonPorNombre);}
         else if($pokemonPorNumero!=null){
        mostrar($pokemonPorNumero);}
        else if($pokemonPorTipo!=null){
        foreach ( $pokemonPorTipo as $pokemon){
            mostrar($pokemon);
        };}
        else{
            header("Location: /Pokedex/index.php");

            exit();
        };
    }

    /*if (isset($_GET['busqueda'])) {
// Procesa la búsqueda
$_SESSION['busqueda'] = $_GET['busqueda'];
} elseif (isset($_SESSION['busqueda'])) {
// Mostrar resultados basados en la búsqueda almacenada en la sesión
$busqueda = $_SESSION['busqueda'];
// Resto del código de manejo de resultados
} else {
// No se ha realizado ninguna búsqueda, puedes mostrar un mensaje o redirigir a la página de inicio, por ejemplo
}*/
    ?>

</main>
<?php
include_once ("../../footer.php");
?>
</body>
</html>