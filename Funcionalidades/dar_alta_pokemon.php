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
    session_start();
        $_SESSION['var'] = '1';
        include_once("../header.php");
    ?>
<main class="contenedor_dar_alta">
    <form class="formulario_alta" action="realizar_alta.php" enctype="multipart/form-data" method="POST">
        <label for="id"> ID del Pokémon </label>
        <input type="number" name="id" id="id" placeholder="Ingrese el id del Pokémon" required>
        <label for="nombre"> Nombre del Pokémon </label>
        <input type="text" name="nombre" id="nombre" placeholder="Ingrese el nombre del Pokémon" required>
        <label for="tipo"> Tipo del Pokémon </label>
        <select id="tipos" name="tipos">
            <option value="agua">Agua</option>
            <option value="bicho">Bicho</option>
            <option value="dragon">Dragón</option>
            <option value="electrico">Eléctrico</option>
            <option value="fantasma">Fantasma</option>
            <option value="fuego">Fuego</option>
            <option value="hielo">Hielo</option>
            <option value="lucha">Lucha</option>
            <option value="normal">Normal</option>
            <option value="planta">Planta</option>
            <option value="psiquico">Psíquico</option>
            <option value="roca">Roca</option>
            <option value="tierra">Tierra</option>
            <option value="veneno">Veneno</option>
            <option value="volador">Volador</option>
        </select>
        <label for="descripcion"> Descripción del Pokémon </label>
        <input type="text" name="descripcion" id="descripcion" placeholder="Ingrese la descripción del Pokémon" required>
        <label for="imagen"> Imagen del Pokémon </label>
        <input type="file" name="imagen" id="imagen" required>
        <br>
        <input class="registrar" type="submit" value="Registrar Pokémon">
    </form>
</main>


</body>
</html>