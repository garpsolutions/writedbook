<?php
    include("../../backend/conexion/cone.php");
    
    //variables de session
    session_start();
    $institucion = $_SESSION["institucion"];
    $usuario_actual= $_SESSION['user'];

    //recibidas por post
    $id_empleado = $_POST["id"];
    $usuario=$_POST["usuario"];
    $materia=$_POST["materia"];
    $tanda = $_POST["tanda"];


    $docentes_db = $conexion->query("SELECT * FROM $institucion.docentes WHERE id_empleado = $id_empleado");
    $existencia_docente = $docentes_db->num_rows;
    if($existencia_docente < 1 ){

        $empleados_db = $conexion->query("SELECT nombre FROM $institucion.empleados where id_empleado= $id_empleado");
        $empleado = $empleados_db->fetch_assoc();
        $nombre= $empleado["nombre"];

        $conexion->query("INSERT INTO $institucion.docentes (id_empleado, nombre,tanda, usuario, estado, creado_por)
        VALUES ('$id_empleado', '$nombre','$tanda', '$usuario','Inactivo','$usuario_actual')");

        $docentes_db2 = $conexion->query("SELECT * FROM $institucion.docentes ORDER BY id_docente DESC LIMIT 1");
        $docente = $docentes_db2->fetch_assoc();
        $id_docente= $docente["id_docente"];

        
        $conexion->query("INSERT INTO $institucion.relacion_rad (id_docente, id_asignatura, estado, creado_por)
        VALUES ('$id_docente',$materia,'Inactivo','$usuario_actual')");

        header("location:../../views/rrhh/agregar_docente.php?add_materia=$id_docente");
    }
    else{
        $docentes_db2 = $conexion->query("SELECT * FROM $institucion.docentes ORDER BY id_docente DESC LIMIT 1");
        $docente = $docentes_db2->fetch_assoc();
        $id_docente= $docente["id_docente"];

        $conexion->query("INSERT INTO $institucion.relacion_rad (id_docente, id_asignatura, estado, creado_por)
        VALUES ('$id_docente',$materia,'Inactivo','$usuario_actual')");
                
        header("location:../../views/rrhh/agregar_docente.php?add_materia=$id_docente");

    }
    
    
?>