<?php
session_start();
$_SESSION['var'] = '1';
if( !isset($_SESSION["usuario"]) ){
    header("location:index.php");
    exit();
}

?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/Pokedex/Estilos/estilos.css">
    <title>Modificar</title>
</head>
<body>
<header>
    <?php
    include_once("../../header.php");
    ?>
</header>
<main class="contenedor_dar_alta">
    <?php
$id=$_GET["id"];
$nombre=$_GET["nombre"];
$tipo=$_GET["tipo"];
$descripcion=$_GET["descripcion"];
$imagen=$_GET["imagen"];
$imagenTemporal=$_GET["imagen"];
$_SESSION['imagenTemporal'] = $imagenTemporal;
?>

    <h2 style="color:black" class="text-center, texto_header" >Modifique los datos que desee de <?php echo $nombre?></h2>
    <br><br>
    <form  class="formulario_alta" action="realizarModificacion.php" enctype="multipart/form-data" method="POST">

        <label for="idOld"> ID Actual del Pokémon </label>
        <input style="text-align: center" type="text" name="idOld" id="idOld" value="<?php echo $id?>" readonly>

        <label for="idNew"> Ingrese ID del Pokémon </label>
        <input type="text" name="idNew" id="idNew" placeholder="Ingresar ID aqui" value="<?php echo $id?>"" >

        <label for="nombre"> Nombre del Pokémon </label>
        <input type="text" name="nombre" id="nombre" value="<?php echo $nombre ?>" >

        <label for="tipo"> Tipo del Pokémon </label>
        <select id="tipos" name="tipos" value="">
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

        <label for="tipo"> Imagen del Pokémon </label>
        <input type="text" name="imagen" id="imagen" value="<?php echo $imagen ?>" >


        <label for="descripcion"> Descripción del Pokémon </label>
        <input type="text" name="descripcion" id="descripcion" value="<?php echo $descripcion?>">

        <br>
        <input class="registrar" type="submit" value="Enviar">
    </form>
</main>
<footer>
    <?php
    include_once("../../footer.php");
    ?>
</footer>
</body>
</html>