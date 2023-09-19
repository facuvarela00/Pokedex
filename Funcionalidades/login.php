<?php
session_start();

$usuario = isset( $_POST["usuario"])?$_POST["usuario"] : "";        //SE FIJA SI USUARIO Y CONTRASEÑA ESTAN SETEADOS, Y TOMA LOS VALORES, EN CASO DE NO ESTARLO LES PONE ""
$pass = isset( $_POST["pass"])?$_POST["pass"] : "";

if ( validarUsuario($usuario, $pass) == TRUE){              //VALIDA LOS USUARIOS EN BUSCA DE VERDADERO. SI ES EL CASO INGRESA A LA SESION USUARIO Y NOS REDIRIGE A LA PAGINA
    $_SESSION["usuario"] = $usuario;                        // LOGGEADA, SINO NOS REDIRIGE A LA NORMAL SIN LOGGEAR,
    header("location:../index_logged.php");
    exit();
} else {
    header("location:../index.php");
    exit();
}

function validarUsuario($usuario, $pass){                       //VALIDA QUE USUARIO Y CONTRASEÑA SEAN LAS CORRECTAS
    return $usuario == "Ash" && $pass == "poke123";
}
?>
