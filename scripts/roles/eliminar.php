<?php
    include("../../backend/conexion/cone.php");

    session_start();
    $id = $_GET["id"];

    $empresa = $_SESSION["institucion"];

    $conexion->query("DELETE FROM $empresa.roles WHERE id_rol= $id");

    header("location:../../views/configuracion/lista_roles.php?back=true");

?>