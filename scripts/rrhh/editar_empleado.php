<?php
    include("../../backend/conexion/cone.php");
    
    //variables de session
    session_start();
    $institucion = $_SESSION["institucion"];
    $usuario_actual= $_SESSION['user'];

    //recibidas por post
    $id=$_POST["id"];
    $nombre= $_POST["nombre"];
    $cedula=$_POST["cedula"];
    $telefono=$_POST["telefono"];
    $email=$_POST["email"];
    $titulo=$_POST["titulo"];
    $salario=$_POST["salario"];
    $departamento=$_POST["departamento"];
    $provincia=$_POST["provincia"];
    $tipo=$_POST["tipo"];
    $puesto=$_POST["puesto"];
    $nacionalidad=$_POST["nacionalidad"];
    $fecha=$_POST["fecha"];
    $estado_civil=$_POST["estado_civil"];
    $direccion=$_POST["direccion"];
    $emergencia=$_POST["emergencia"];
    $parentesco=$_POST["parentesco"];
    $telefono_emergencia=$_POST["tel_emergencia"];

    
    //Editando
    $conexion->query("UPDATE $institucion.empleados SET
     nombre='$nombre',
     cedula='$cedula', 
     telefono='$telefono', 
     email='$email', 
     titulo_academico='$titulo', 
     salario='$salario', 
     direccion='$direccion', 
     lugar_nacimiento='$provincia', 
     estado_civil='$estado_civil', 
     nacionalidad='$nacionalidad', 
     fecha_nacimiento='$fecha', 
     puesto='$puesto', 
     departamento='$departamento', 
     tipo_contrato='$tipo', 
     nombre_contacto='$emergencia', 
     parentesco_contacto='$parentesco', 
     telefono_contacto='$telefono_emergencia', 
     estado='$estado' 
     WHERE id_empleado= $id");
    
    header("location:../../views/rrhh/empleados.php");
?>