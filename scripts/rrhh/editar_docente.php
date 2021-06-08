<?php
    include("../../backend/conexion/cone.php");
    
    //variables de session
    session_start();
    $institucion = $_SESSION["institucion"];
    $usuario_actual= $_SESSION['user'];

    //recibidas por post
    echo $id = $_POST["id"]." ";
    echo $id_empleado=$_POST["empleado"]." ";
    echo $usuario= $_POST["usuario"]." ";
    echo $tanda = $_POST["tanda"]." ";
    echo $estado = $_POST["estado"]." ";

    $conexion->query("UPDATE $institucion.docentes SET id_empleado = $id_empleado, usuario='$usuario', tanda='$tanda', estado='$estado' WHERE id_docente = $id");

    header("location:../../views/rrhh/docentes.php");
?>
