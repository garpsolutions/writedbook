<?php
    include("../../backend/conexion/cone.php");
    
    //variables de session
    session_start();
    $institucion = $_SESSION["institucion"];
    $usuario_actual= $_SESSION['user'];
    $nombre = $_POST["nombre"];
    $asignatura= $_POST["asignatura"];
    $curso = $_POST["curso"];
    $fecha_inicio = $_POST["fecha_inicio"];
    $fecha_cierre = $_POST["fecha_cierre"];

    if($fecha_inicio > $fecha_cierre){
            header("location:../../views/asignaturas/planificacion.php?mayor=true");
    }
    else{
        $conexion->query("INSERT INTO $institucion.unidades (asignatura, nombre, curso, fecha_inicio, fecha_cierre, creado_por) VALUES('$asignatura','$nombre','$curso','$fecha_inicio','$fecha_cierre','$usuario_actual') ");
        header("location:../../views/asignaturas/planificacion.php?back=true");
    }
?>
