<?php
function mostrarLogged($resultado){
    echo '<section class="registro_pokemon">';
    echo '<article class="col_icono_pokemon">';
    echo '<img class="icono_pokemon_registro" src="Imagenes/Otras/pokeball_registro.png">';
    echo '</article>';
    echo '<article class="col_data">';
    echo '<h2 class="mostrar_id_pokemon">#'. $resultado["id"].'</h2><br>';
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

function mostrar($resultado){
    echo '<section class="registro_pokemon">';
    echo '<article class="col_icono_pokemon">';
    echo '<img class="icono_pokemon_registro" src="/Pokedex/Imagenes/Otras/pokeball_registro.png">';
    echo '</article>';
    echo '<article class="col_data">';
    echo '<h2 class="mostrar_id_pokemon">#'.$resultado["id"].'</h2><br>';
    echo '<h2 class="mostrar_nombre_pokemon">'.$resultado['nombre'].'</h2><br>';
    echo '<img class="mostrar_tipo_pokemon" src="/Pokedex/Imagenes/Tipo/'.$resultado['tipo'].'">';
    echo '</article>';
    echo '<article class="col_imagen_poke">';
    echo '<img class="mostrar_imagen_pokemon" src="/Pokedex/Imagenes/Pokemon/'.$resultado['imagen'].'" alt="">';
    echo '</article>';
    echo '</section>';
}
?>