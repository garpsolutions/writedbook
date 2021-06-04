<?php
    include("../../backend/conexion/cone.php");
    
    //variables de session
    session_start();
    $institucion = $_SESSION["institucion"];
    $usuario_actual= $_SESSION['user'];

    //recibidas por post
    $id_empleado = $_GET["id"];

    $finalizar_docente=$conexion->query("UPDATE $institucion.docentes SET estado='Activo' WHERE id_docente = $id_empleado");
    $finalizar_relacion=$conexion->query("UPDATE $institucion.relacion_rad SET estado='Activo'  WHERE id_docente = $id_empleado");
    

    echo $id_empleado;
    header("location:../../views/rrhh/docentes.php?");


    
    
?>