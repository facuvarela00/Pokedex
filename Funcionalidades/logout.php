<?php
session_start();

session_destroy();
header("Location:/Pokedex/index.php");
?>