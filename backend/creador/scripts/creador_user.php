<?php
    include("../../conexion/cone.php");
    $username= $_POST["username"];
    $name= $_POST["nombre"];
    $password= $_POST["contrasena"];
    $empresa = $_POST["empresa"];

    //creacion de usuario admin
    $conexion->query("INSERT INTO $empresa.usuarios (user_nombre ,nombre, user_password) VALUES ('$username','$name','$password')");
    
    //creacion del rol admin
    $conexion->query("INSERT INTO $empresa.roles (nombre, estado, creado_por) VALUES ('admin_sys', 'activo','System')");
    //creacion del rol admin
    $conexion->query("INSERT INTO $empresa.permisos (id_rol, creador_por) VALUES (1,'System')");
    header("location:../../../views/login/login.php");
?>