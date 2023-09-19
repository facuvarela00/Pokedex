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
        include_once("header.php");
    ?>

</header>
<main>
    <?php
    include_once ("BD/conectar_a_bd.php");
    $consulta = "SELECT * FROM pokemon";
    $respuesta = $conexion->query($consulta);
    $resultados =  $respuesta->fetch_all(MYSQLI_ASSOC);

    if(isset($_SESSION["usuario"])){
        foreach ( $resultados as $resultado){
            echo '<section class="registro_pokemon">';
            echo '<article class="col_icono_pokemon">';
            echo '<img class="icono_pokemon_registro" src="Imagenes/Otras/pokeball_registro.png">';
            echo '</article>';
            echo '<article class="col_data">';
            echo '<h2 class="mostrar_id_pokemon">#'.$resultado["id"].'</h2><br>';
            echo '<h2 class="mostrar_nombre_pokemon">'.$resultado['nombre'].'</h2><br>';
            echo '<img class="mostrar_tipo_pokemon" src="Imagenes/Tipo/'.$resultado['tipo'].'">';
            echo '</article>';
            echo '<article class="col_imagen_poke">';
            echo '<img class="mostrar_imagen_pokemon" src="Imagenes/Pokemon/'.$resultado['imagen'].'" alt="">';
            echo '</article>';
            echo '<article class="col_modificaciones">';
            echo '<a class="imagen_modificar" href="#"></a>';
            echo '<a class="imagen_eliminar" href="#"></a>';
            echo '</article>';
            echo '</section>';
        }
        echo'<section class="centrar_boton">
        <button class="boton_añadir"><a  href="Funcionalidades/dar_alta_pokemon.php">Añadir Registro</a></button>
        </section>';
        }

    else{
        foreach ($resultados as $resultado){
            echo '<section class="registro_pokemon">';
            echo '<article class="col_icono_pokemon">';
            echo '<img class="icono_pokemon_registro" src="Imagenes/Otras/pokeball_registro.png">';
            echo '</article>';
            echo '<article class="col_data">';
            echo '<h2 class="mostrar_id_pokemon">#'.$resultado["id"].'</h2><br>';
            echo '<h2 class="mostrar_nombre_pokemon">'.$resultado['nombre'].'</h2><br>';
            echo '<img class="mostrar_tipo_pokemon" src="Imagenes/Tipo/'.$resultado['tipo'].'">';
            echo '</article>';
            echo '<article class="col_imagen_poke">';
            echo '<img class="mostrar_imagen_pokemon" src="Imagenes/Pokemon/'.$resultado['imagen'].'" alt="">';
            echo '</article>';
            echo '</section>';
        }
    }
    ?>
</main>

</body>
</html>