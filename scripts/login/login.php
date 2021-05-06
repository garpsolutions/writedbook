<?php 
    $usuario = $_POST["user"];
    $contrasena = $_POST["pass"];
    $empresa= $_POST["empresa"];
    $usuario = $conexion->query("SELECT * from $empresa.usuario where user_nombre");
// start a session
session_start();

 
// initialize session variables
$_SESSION['user'] = $usuario;
$_SESSION['pass'] = $contrasena;
$_SESSION['rol']= $rol;
?>