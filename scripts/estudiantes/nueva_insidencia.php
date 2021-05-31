<?php
    include("../../backend/conexion/cone.php");
    session_start();

    $usuario_actual= $_SESSION['user'];
    $institucion = $_SESSION["institucion"];

    $estudiante= $_POST["id"];
    $tipo = $_POST["tipo"];
    $afectado = $_POST["afectado"];
    $detalles = $_POST["detalles"];
    $recomendaciones=$_POST["recomendaciones"];
    $sancion=$_POST["sancion"];

    $conexion->query("INSERT INTO $institucion.reportes_conducta (estudiante, tipo_reporte, detalle, afectados, recomendaciones, decision, creado_por) VALUES ('$estudiante','$tipo', '$detalles','$afectado','$recomendaciones','$sancion','$usuario_actual')");
    
    header("location:../../views/estudiantes/insidencias.php?id=$estudiante");
?>