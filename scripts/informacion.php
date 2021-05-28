<?php
    include("../backend/conexion/cone.php");

    session_start();

    $nombre= $_POST["nombre"];
    $rnc= $_POST["rnc"];
    $direccion= $_POST["direccion"];
    $telefono= $_POST["telefono"];
    $distrito= $_POST["distrito"];
    $email= $_POST["email"];
    $logo = $_POST["logo"];
    $empresa = $_SESSION["institucion"];
   
    $conexion->query("UPDATE $empresa.informacion SET nombre = '$nombre', rnc='$rnc', direccion= '$direccion',
    telefono='$telefono', distrito = '$distrito', email= '$email', logo= '$logo' ");

    header("location:../views/configuracion/informacion.php?back=true");

?>