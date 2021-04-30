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

    header("location:../views/creador_user.php?empresa=$namedb");
    
?>