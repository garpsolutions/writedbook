<?php
    include("../../conexion/cone.php");
    $username= $_POST["username"];
    $name= $_POST["nombre"];
    $password= $_POST["contrasena"];
    $empresa = $_POST["empresa"];

    //creacion de usuario admin
    $conexion->query("INSERT INTO $empresa.usuarios (user_nombre ,nombre, user_password) VALUES ('$username','$name','$password')");

    header("location:../../../views/login/login.php");
?>