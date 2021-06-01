<?php
include("../../backend/conexion/cone.php");
session_start();

$id = $_POST["id"];
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


$conexion->query("UPDATE $institucion.estudiantes SET 
nombre ='$nombre',
provincia='$provincia', 
apellido_materno='$apellido_materno', 
apellido_paterno='$apellido_paterno', 
nombre_padre='$nombre_padre', 
nombre_madre='$nombre_madre', 
telefono_padre='$telefono_padre', 
telefono_madre='$telefono_madre', 
celular_madre='$celular_madre', 
celular_padre='$celular_padre', 
direccion_madre='$direccion', 
cercano_padre='$familiar_cercano_padre', 
cercano_madre='$familiar_cercano_madre', 
parentesco_cercano_madre='$parentesco_familiar_madre', 
parentesco_cercano_padre='$parentesco_familiar_padre', 
telefono_cercano_padre='$telefono_familiar_padre', 
telefono_cercano_madre='$telefono_familiar_madre', 
celular_cercano_madre='$celular_familiar_madre', 
celular_cercano_padre='$celular_familiar_padre', 
direccion_cercano_madre='$direccion_familiar_madre', 
direccion_cercano_padre='$direccion_familiar_padre', 
colegio_anterior='$colegio_anterior', 
curso_colegio_anterior='$colegio_anterior', 
motivo_cambio_colegio='$motivo_salida', 
fecha_nacimiento='$fecha_nacimiento' 
where id_estudiante = $id");
header("location:../../views/estudiantes/detalles_estudiante.php?id=$id");
?>