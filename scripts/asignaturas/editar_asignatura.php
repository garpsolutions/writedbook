<?php
    include("../../backend/conexion/cone.php");
    
    //variables de session
    session_start();
    $institucion = $_SESSION["institucion"];
    $usuario_actual= $_SESSION['user'];
    $id=$_POST["id"];
    $nombre = strtoupper($_POST["nombre"]);
    $codigo = strtoupper($_POST["codigo"]);
    $nivel = $_POST["nivel"];
    $tipo = $_POST["tipo"];

    echo $codigo;
    $conexion->query("UPDATE $institucion.asignaturas SET asignatura='$nombre', nivel_academico ='$nivel', codigo='$codigo', tipo='$tipo' WHERE id_asignatura= $id ");

    header("location:../../views/asignaturas/lista_de_asignaturas.php?back=true");
?>
