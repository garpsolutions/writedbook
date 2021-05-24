<?php
    include("../../backend/conexion/cone.php");
    session_start();
    $usuario_actual= $_SESSION['user'];
    $nombre= $_POST["nombre"];
    $user= $_POST["usuario"];
    $pass= $_POST["pass"];
    $rol= $_POST["rol"];
    $empresa = $_SESSION["institucion"];
    $conexion->query("INSERT INTO $empresa.usuarios (nombre, user_nombre, user_password, rol, creado_por) VALUES ('$nombre','$user','$pass','$rol','$usuario_actual')");
?>