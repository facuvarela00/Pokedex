<?php
    echo '
    <header class="contenedor_header">
    
    <article class="isologo_contenedor">
     <img class="logo_header" src="Imagenes/Otras/pokeball_header.png" alt="Pokeball">
    <h1 class="titulo_header">Pokédex</h1>
    </article>
    
    <article class="buscador_contenedor">
     <form action="Funcionalidades/Busqueda/buscar.php">
    <label for="busqueda"></label>
    <input type="text" id="buscador" name="buscador" placeholder="Buscar Pokémon">
    <input type="submit" id="envio_formulario" name="envio_formulario" value="¿Quién es éste Pokémon?">
    </form>
    </article>';
   
   if(isset($_SESSION["usuario"]) ){
       echo'<article class="login_contenedor">
    <h2>Bienvenido Ash!</h2>
    <form action="Funcionalidades/logout.php" enctype="multipart/form-data" method="POST">
    <input type="submit" value="Cerrar Sesión">
    </form>
 </header>';}
   else{
       echo'
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
    </article>
    </header>';}


