<?php
echo '
<header class="contenedor_header">
    
    <article class="isologo_contenedor">
     <img class="logo_header" src="Imagenes/Otras/pokeball_header.png" alt="Pokeball">
    <h1 class="titulo_header">Pokédex</h1>
    </article>
    
    <article class="buscador_contenedor">
     <form action="buscar_pokemon.php">
    <label for="busqueda"></label>
    <input type="text" id="buscador" name="buscador" placeholder="Buscar Pokémon">
    <input type="submit" id="envio_formulario" name="envio_formulario" value="¿Quién es éste Pokémon?">
    </form>
    </article>
   
    <article class="login_contenedor">
    <form action="Funcionalidades/login.php" class="formulario_login" method="POST" enctype="multipart/form-data">
    <article>
        <input type="text" id="usuario" name="usuario" placeholder="Ingresar Usuario"><br>
        <input type="password" id="pass" name="pass" placeholder="Ingresar Contraseña">
    </article>
    <article>
    <input type="submit" id="ingresar" name="ingresar" value="">
    </article>
    </form>
    
    </article>
         
</header>'


?>