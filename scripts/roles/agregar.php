<?php
    include("../../backend/conexion/cone.php");
    session_start();
    $usuario_actual= $_SESSION['user'];
    $nombre= $_POST["nombre"];
    $empresa = $_SESSION["institucion"];
    $conexion->query("INSERT INTO $empresa.roles (nombre, creado_por) VALUES ('$nombre','$usuario_actual')");
    $conexion->query("INSERT INTO $empresa.permisos (id_rol,rol, creador_por) VALUES (1,'$nombre','$usuario_actual')");

    header("location:../../views/configuracion/permisos.php?");
?>