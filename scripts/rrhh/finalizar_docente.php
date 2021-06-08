<?php
    include("../../backend/conexion/cone.php");
    
    //variables de session
    session_start();
    $institucion = $_SESSION["institucion"];
    $usuario_actual= $_SESSION['user'];

    //recibidas por post
    $tanda = $_POST["tanda"];

    $consulta_ultimo_docente=$conexion->query("SELECT id_docente from $institucion.docentes WHERE creado_por = '$usuario_actual' ORDER BY id_docente DESC LIMIT 1");
    $docente= $consulta_ultimo_docente->fetch_assoc();
    $id= $docente["id_docente"];


    $finalizar_docente=$conexion->query("UPDATE $institucion.docentes SET estado='Activo', tanda='$tanda' WHERE id_docente = $id");
    $finalizar_relacion=$conexion->query("UPDATE $institucion.relacion_rad SET estado='Activo'  WHERE id_docente = $id");
    

    echo $id_empleado." ".$tanda;
    //header("location:../../views/rrhh/docentes.php?");


    
    
?>