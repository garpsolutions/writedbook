<?php 
    $usuario = $_POST["user"];
    $contrasena = $_POST["pass"];
    $empresa= $_POST["empresa"];
    $usuario_db = $conexion->query("SELECT * from $empresa.usuario where user_nombre = '$usuario' and user_password= '$contrasena'");
    $verificacion_existencia = $usuario_db;
// start a session
session_start();

 
// initialize session variables
$_SESSION['user'] = $usuario;
$_SESSION['pass'] = $contrasena;
$_SESSION['rol']= $rol;
?>