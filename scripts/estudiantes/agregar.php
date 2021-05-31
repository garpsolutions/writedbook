<?php
include("../../backend/conexion/cone.php");
session_start();
$usuario_actual= $_SESSION['user'];
$institucion = $_SESSION["institucion"];
$nombre = $_POST["nombre_estudiante"];
$apellido_materno= $_POST["apellido_materno"];
$apellido_paterno = $_POST["apellido_paterno"];
$colegio_anterior = $_POST["colegio_anterior"];
$curso_anterior = $_POST["curso_anterior"];
$provincia = $_POST["provincia"];
$fecha_nacimiento = $_POST["fecha_nacimiento"];
$motivo_salida= $_POST["razon"];


$nombre_madre =$_POST["nombre_madre"];
$nombre_padre=$_POST["nombre_padre"];
$telefono_padre =$_POST["telefono_padre"];
$telefono_madre =$_POST["telefono_madre"];
$celular_madre =$_POST["celular_madre"];
$celular_padre =$_POST["celular_padre"];
$direccion = $_POST["direccion"];


$familiar_cercano_madre =$_POST["familiar_madre"];
$parentesco_familiar_madre=$_POST["parentesco_madre"];
$direccion_familiar_madre=$_POST["direccion_madre"];
$telefono_familiar_madre=$_POST["familiar_telefono_madre"];
$celular_familiar_madre=$_POST["familiar_celular_madre"];


$familiar_cercano_padre=$_POST["familiar_padre"];
$parentesco_familiar_padre =$_POST["parentesco_padre"];
$direccion_familiar_padre =$_POST["direccion_padre"];
$telefono_familiar_padre =$_POST["familiar_telefono_padre"];
$celular_familiar_padre=$_POST["familiar_celular_padre"];

// creacion de la matricula
$distrito_db = $conexion->query("SELECT distrito FROM $institucion.informacion");
$distrito = $distrito_db->fetch_assoc();
$letra_nombre= $nombre[0];
$letra_apellido_m= $apellido_materno[0];
$letra_apellido_p= $apellido_paterno[0];
$ano= substr($fecha_nacimiento,2,2);
$mes= substr($fecha_nacimiento,5,2);
$dia= substr($fecha_nacimiento,8,2);
$matricula = $letra_nombre.$letra_apellido_p.$letra_apellido_m.$ano.$mes.$dia.$distrito["distrito"];
echo $matricula;

$conexion->query("INSERT INTO  $institucion.estudiantes (matricula, nombre, apellido_materno, apellido_paterno, nombre_padre, nombre_madre, telefono_padre, telefono_madre, celular_madre, celular_padre, direccion_madre, cercano_padre,cercano_madre, parentesco_cercano_madre, parentesco_cercano_padre, telefono_cercano_padre, telefono_cercano_madre, celular_cercano_madre, celular_cercano_padre, direccion_cercano_madre, direccion_cercano_padre, colegio_anterior, curso_colegio_anterior, motivo_cambio_colegio, estado, fecha_nacimiento, creado_por)
VALUES('$matricula', '$nombre','$apellido_materno','$apellido_paterno','$nombre_padre','$nombre_madre','$telefono_padre','$telefono_madre','$celular_madre','$celular_padre','$direccion','$familiar_cercano_padre','$familiar_cercano_madre','$parentesco_familiar_madre','$parentesco_familiar_padre','$telefono_familiar_padre','$telefono_familiar_madre','$celular_familiar_madre','$celular_familiar_padre', '$direccion_familiar_madre', '$direccion_familiar_padre','$colegio_anterior','$curso_anterior','$motivo_salida','Activo','$fecha_nacimiento','$usuario_actual')");
header("location:../../views/estudiantes/estudiantes.php?back=true");
?>