<?php
    include("../../backend/conexion/cone.php");
    
    //variables de session
    session_start();
    $institucion = $_SESSION["institucion"];
    $usuario_actual= $_SESSION['user'];

    //recibidas por post
    $id_empleado = $_GET["id"];

    $finalizar_docente=$conexion->query("DELETE FROM $institucion.docentes WHERE id_docente = $id_empleado");
    $finalizar_relacion=$conexion->query("DELETE FROM $institucion.relacion_rad WHERE id_docente = $id_empleado");
    

    echo $id_empleado;
    header("location:../../views/rrhh/docentes.php?");


    
    
?>