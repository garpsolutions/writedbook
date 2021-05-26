<?php
    include("../../backend/conexion/cone.php");

    session_start();
    $id = $_POST["id"];
    $usuario_actual= $_SESSION['user'];
    $nombre= $_POST["nombre"];
    $user= $_POST["usuario"];
    $pass= $_POST["pass"];
    $rol= $_POST["rol"];

    $empresa = $_SESSION["institucion"];

    $conexion->query("UPDATE $empresa.usuarios SET nombre = '$nombre', user_nombre= '$user', user_password= '$pass', rol='$rol' WHERE id_user= $id");

    header("location:../../views/configuracion/usuarios.php");

?>