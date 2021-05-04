<?php
    include("../../conexion/cone.php");
    $namedb= $_POST["nombre"];
    //creacion de base de datos
    $conexion->query("CREATE DATABASE $namedb");

    //creacion de la tabla de usuarios
    $conexion->query("CREATE TABLE $namedb.usuarios
    ( `id_user` INT NOT NULL AUTO_INCREMENT , 
    `user_nombre` VARCHAR(100) NOT NULL ,
    `nombre` VARCHAR(100) NOT NULL ,
    `user_password` VARCHAR(100) NOT NULL ,
    `rol` VARCHAR(100) NOT NULL DEFAULT 'admin' , 
    `creado_por` VARCHAR(100) NOT NULL DEFAULT 'System' , 
    `fecha_creacion` TIMESTAMP NOT NULL , 
    `modificado_por` VARCHAR(200) NULL , 
    `fecha_modificacion` VARCHAR(100) NULL , 
    PRIMARY KEY (`id_user`)) ENGINE = InnoDB;");

$conexion->query("CREATE TABLE $namedb.estudiantes
 ( `id_estudiante` INT NOT NULL AUTO_INCREMENT , 
 `nombre` VARCHAR(200) NULL , 
 `apellido_paterno` VARCHAR(200) NULL , 
 `apellido_materno` VARCHAR(100) NULL , 
 `nombre_padre` VARCHAR(100) NULL , 
 `nombre_madre` VARCHAR(100) NULL , 
 `telefono_padre` VARCHAR(100) NULL , 
 `telefono_madre` VARCHAR(200) NULL , 
 `celular_madre` VARCHAR(100) NULL , 
 `celular_padre` VARCHAR(100) NULL , 
 `direccion_madre` TEXT NULL , 
 `direccion_padre` TEXT NULL , 
 `cercano_padre` VARCHAR(100) NULL , 
 `cercano_madre` VARCHAR(100) NULL , 
 `parentesco_cercano_padre` VARCHAR(100) NULL , 
 `parentesco_cercano_madre` VARCHAR(100) NULL , 
 `telefono_cercano_padre` VARCHAR(100) NULL , 
 `telefono_cercano_madre` VARCHAR(100) NULL , 
 `celular_cercano_padre` VARCHAR(100) NULL , 
 `celular_cercano_madre` VARCHAR(100) NULL , 
 `direccion_cercano_padre` TEXT NULL , 
 `direccion_cercano_madre` TEXT NULL , 
 `colegio_anterior` VARCHAR(100) NULL , 
 `curso_colegio_anterior` VARCHAR(100) NULL , 
 `motivo_cambio_colegio` TEXT NULL , 
 `curso_actual` VARCHAR(100) NULL , 
 `indice` INT(4) NULL , 
 `estado` VARCHAR(100) NULL , 
 `fecha_creacion` TIMESTAMP NULL , 
 `fecha_modificacion` TIMESTAMP NULL , 
 `creado_por` VARCHAR(100) NULL , 
 `modificado_por` VARCHAR(100) NULL ,
  PRIMARY KEY (`id_estudiante`)) ENGINE = InnoDB;
");
$conexion->query("CREATE TABLE `mateo`.`planificacion_inicial`
 ( `id_planificacion` INT NOT NULL AUTO_INCREMENT , 
 `docente` VARCHAR(200) NULL , 
 `año` VARCHAR(100) NULL , 
 `tanda` VARCHAR(100) NULL , 
 `duracion` VARCHAR(100) NULL , 
 `curso` VARCHAR(100) NULL , 
 `estrategia_planificacion` TEXT NULL , 
 `fecha_inicio` DATE NULL , 
 `fecha_cierre` DATE NULL , 
 `conmemoracion` VARCHAR(100) NULL , 
 `tema` VARCHAR(100) NULL , 
 `seleccion_tema` VARCHAR(100) NULL , 
 `saber_previo` TEXT NULL , 
 `nuevo_saber` TEXT NULL , 
 `como_saber` TEXT NULL , 
 `fecha_creacion` TIMESTAMP NULL , 
 `fecha_modificacion` TIMESTAMP NULL , 
 `creado_por` VARCHAR(100) NULL , 
 `modificado_por` VARCHAR(100) NULL , 
 PRIMARY KEY (`id_planificacion`)) ENGINE = InnoDB;
");






    header("location:../views/creador_user.php?empresa=$namedb");
    
?>