<?php
    include("../../backend/conexion/cone.php");
    session_start();
    $usuario_actual= $_SESSION['user'];
    $nombre= $_POST["nombre"];
    $empresa = $_SESSION["institucion"];
    $conexion->query("INSERT INTO $empresa.roles (nombre, creado_por) VALUES ('$nombre','$usuario_actual')");
    $conexion->query("INSERT INTO $empresa.permisos (id_rol,rol, creado_por) VALUES (1,'$nombre','$usuario_actual')");
    $consulta_nuevo_rol= $conexion->query("SELECT rol FROM $empresa.permisos ORDER BY id_permisos DESC LIMIT 1");
    $id_db=$consulta_nuevo_rol->fetch_assoc();
    $rol = $id_db["rol"];
    header("location:../../views/configuracion/permisos.php?rol=$rol");
?>