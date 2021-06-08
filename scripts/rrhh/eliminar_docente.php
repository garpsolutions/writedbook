<?php
    include("../../backend/conexion/cone.php");
    
    //variables de session
    session_start();
    $institucion = $_SESSION["institucion"];
    $usuario_actual= $_SESSION['user'];
    $id = $_GET["id"];

    $conexion->query("DELETE FROM $institucion.docentes WHERE id_docente = $id");

    header("location:../../views/rrhh/docentes.php");
?>
