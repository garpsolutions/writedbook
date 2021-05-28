<?php
    include("../../backend/conexion/cone.php");

    session_start();
    $user= $_POST["usuario"];
    $pass= $_POST["nueva"];
    $anterior= $_POST["anterior"];


    $institucion = $_SESSION["institucion"];
    $usuario_actual = $_SESSION["user"];

    $verificacion_db = $conexion->query("SELECT * FROM $institucion.usuarios WHERE user_nombre= '$usuario_actual'");
    $verificacion = $verificacion_db->fetch_assoc();
    $anterior_db = $verificacion["user_password"];

    if($anterior_db == $anterior){
        $conexion->query("UPDATE $institucion.usuarios SET nombre= '$user', user_password= '$pass' WHERE user_nombre= '$usuario_actual'");
        $usuario_db = $conexion->query("SELECT * FROM $institucion.usuarios WHERE user_nombre= '$user'");
        $usuario=$usuario_db->fetch_assoc();
        $id=$usuario["id_user"];
        $_SESSION['nombre']=$user;
        header("location:../../views/configuracion/editar_user2.php?back=true&&id=$id");
    }
    else{
        $usuario_db = $conexion->query("SELECT * FROM $institucion.usuarios WHERE user_nombre= '$user'");
        $usuario=$usuario_db->fetch_assoc();
        $id=$usuario["id_user"];
        header("location:../../views/configuracion/editar_user2.php?back2=true&&id=$id");
    }


   

?>