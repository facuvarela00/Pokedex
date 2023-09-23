<?php

include_once ("../../BD/conectar_a_bd.php");
include_once ("../../BD/busquedaBD.php");

if (isset($_GET["buscador"])) {

    $aBuscar=$_GET['buscador'];

    $pokemonPorNombre = buscarPokemonPorNombre($aBuscar);
    $pokemonPorTipo=buscarPokemonPorTipo($aBuscar);
    $pokemonPorNumero=buscarPokemonPorNumero($aBuscar);

}else {
    header("Location: /Pokedex/index.php");
    exit();
}
?>