<?php
    include("../../backend/conexion/cone.php");
    
    //variables de session
    session_start();
    $institucion = $_SESSION["institucion"];
    $usuario_actual= $_SESSION['user'];
    $nombre = $_POST["nombre"];
    $codigo = $_POST["codigo"];
    $nivel = $_POST["nivel"];
    $tipo = $_POST["tipo"];

    echo $codigo;
    $conexion->query("INSERT INTO $institucion.asignaturas (asignatura, nivel_academico, codigo, tipo, estado, creado_por) VALUES('$nombre','$nivel','$codigo','$tipo','Activo','$usuario_actual') ");

    header("location:../../views/asignaturas/crear_asignatura.php?back=true");
?>
