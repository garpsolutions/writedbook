<?php
    include("../../backend/conexion/cone.php");
    
    //variables de session
    session_start();
    $institucion = $_SESSION["institucion"];
    $usuario_actual= $_SESSION['user'];

    //recibidas por post
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

    
    //inserciones a tablas correspondientes
    $conexion->query("INSERT INTO $institucion.empleados (nombre, cedula,telefono,email,titulo_academico,salario, direccion,lugar_nacimiento, estado_civil,nacionalidad, fecha_nacimiento, puesto, departamento, tipo_contrato, nombre_contacto,parentesco_contacto,telefono_contacto, estado, creado_por)
    VALUES ('$nombre', '$cedula','$telefono','$email','$titulo',$salario,'$direccion','$provincia','$estado_civil','$nacionalidad','$fecha','$puesto','$departamento','$tipo','$emergencia','$parentesco','$telefono_emergencia','Activo','$usuario_actual')");
    
    header("location:../../views/rrhh/empleados.php");
?>