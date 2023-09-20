<?php
function mostrarLogged($resultado){
    echo '<section class="registro_pokemon">';
    echo '<a href="/Pokedex/Funcionalidades/Informacion/visualizarPokemon.php?id='.$resultado["id"].'&nombre='.$resultado["nombre"].'&tipo='.$resultado["tipo"].'&descripcion='.$resultado["descripcion"].'&imagen='.$resultado["imagen"].'">';
    echo '<article class="col_icono_pokemon">';
    echo '<img class="icono_pokemon_registro" src="/Pokedex/Imagenes/Otras/pokeball_registro.png">';
    echo '</article>';
    echo '</a>';
    echo '<article class="col_data">';
    echo '<h2 class="mostrar_id_pokemon">#'. $resultado["id"].'</h2><br>';
    echo '<h2 class="mostrar_nombre_pokemon">'.$resultado['nombre'].'</h2><br>';
    echo '<img class="mostrar_tipo_pokemon" src="/Pokedex/Imagenes/Tipo/'.$resultado['tipo'].'">';
    echo '</article>';
    echo '<article class="col_imagen_poke">';
    echo '<img class="mostrar_imagen_pokemon" src="/Pokedex/Imagenes/Pokemon/'.$resultado['imagen'].'" alt="">';
    echo '</article>';
    echo '<article class="col_modificaciones">';
    echo '<a class="imagen_modificar" href="/Pokedex/Funcionalidades/Modificacion/modificar.php?id='.$resultado["id"].'&nombre='.$resultado["nombre"].'&tipo='.$resultado["tipo"].'&descripcion='.$resultado["descripcion"].'&imagen='.$resultado["imagen"].'"></a>';
    echo '<a class="imagen_eliminar" href="/Pokedex/Funcionalidades/Modificacion/eliminar.php?id='.$resultado["id"].'&nombre='.$resultado["nombre"].'&tipo='.$resultado["tipo"].'&descripcion='.$resultado["descripcion"].'&imagen='.$resultado["imagen"].'"></a>';
    echo '</article>';
    echo '</section>';
}

function mostrar($resultado){
    echo '<section class="registro_pokemon">';
    echo '<a href="/Pokedex/Funcionalidades/Informacion/visualizarPokemon.php?id='.$resultado["id"].'&nombre='.$resultado["nombre"].'&tipo='.$resultado["tipo"].'&descripcion='.$resultado["descripcion"].'&imagen='.$resultado["imagen"].'">';
    echo '<article class="col_icono_pokemon">';
    echo '<img class="icono_pokemon_registro" src="/Pokedex/Imagenes/Otras/pokeball_registro.png">';
    echo '</article>';
    echo '</a>';
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