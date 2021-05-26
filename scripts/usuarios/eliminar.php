<?php
    include("../../backend/conexion/cone.php");

    session_start();
    $id = $_GET["id"];

    $empresa = $_SESSION["institucion"];

    $conexion->query("DELETE FROM $empresa.usuarios WHERE id_user= $id");

    header("location:../../views/configuracion/usuarios.php?back=true");

?>