<?php
    include("../../backend/conexion/cone.php");
    
    //variables de session
    session_start();
    $institucion = $_SESSION["institucion"];
    $usuario_actual= $_SESSION['user'];

    $id=$_GET["id"];

    echo $id;

    $conexion->query("DELETE FROM $institucion.asignaturas WHERE id_asignatura= $id ");

    header("location:../../views/asignaturas/lista_de_asignaturas.php?back=true");
?>
