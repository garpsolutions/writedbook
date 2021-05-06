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
 `fecha_nacimiento` DATE NULL ,
 `fecha_creacion` TIMESTAMP , 
 `fecha_modificacion` TIMESTAMP NULL , 
 `creado_por` VARCHAR(100) NULL , 
 `modificado_por` VARCHAR(100) NULL ,
  PRIMARY KEY (`id_estudiante`)) ENGINE = InnoDB;
");
$conexion->query("CREATE TABLE $namedb.planificacion_inicial
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
 `fecha_creacion` TIMESTAMP  , 
 `fecha_modificacion` TIMESTAMP NULL , 
 `creado_por` VARCHAR(100) NULL , 
 `modificado_por` VARCHAR(100) NULL , 
 PRIMARY KEY (`id_planificacion`)) ENGINE = InnoDB;
");
$conexion->query("CREATE TABLE $namedb.reportes_conducta
 ( `id_reporte` INT NOT NULL AUTO_INCREMENT , 
 `estudiante` VARCHAR(200) NULL , 
 `tipo_reporte` VARCHAR(100) NULL , 
 `detalle` TEXT NULL , 
 `afectados` TEXT NULL , 
 `recomendaciones` TEXT NULL , 
 `decision` TEXT NULL , 
 `fecha_creacion` TIMESTAMP , 
 `creado_por` VARCHAR(100) NULL ,
  PRIMARY KEY (`id_reporte`)) ENGINE = InnoDB;
");

$conexion->query("CREATE TABLE $namedb.actividades
( `id_actividad` INT NOT NULL AUTO_INCREMENT , 
`fecha` VARCHAR(100) NULL , 
`fecha_creacion` TIMESTAMP NOT NULL , 
`creado_por` VARCHAR(100) NULL , 
`observaciones` TEXT NULL ,
`evaluacion` TEXT NULL ,
`docente` VARCHAR(100) NULL , 
`curso` VARCHAR(100) NULL , 
PRIMARY KEY (`id_actividad`)) ENGINE = InnoDB;
");

$conexion->query(" CREATE TABLE $namedb.solicitud_empleo 
( `id_solicitud` INT NOT NULL AUTO_INCREMENT , 
`nombre` VARCHAR(100) NULL , 
`cedula` VARCHAR(100) NULL , 
`telefono` VARCHAR(100) NULL ,
 `direccion` TEXT NULL , 
 `celular` VARCHAR(100) NULL , 
 `estado_civil` VARCHAR(100) NULL , 
 `email` VARCHAR(200) NULL , 
 `puesto_solicitado` VARCHAR(100) NULL , 
 `aspiracion_salarial` INT NULL , 
 `universidad_estudio` TEXT NULL , 
 `especialidades` TEXT NULL , 
 `disponibilidad_extra` VARCHAR(100) NULL , 
 `fecha_creacion` TIMESTAMP NOT NULL , 
 PRIMARY KEY (`id_solicitud`)) ENGINE = InnoDB;
");
$conexion->query(" CREATE TABLE $namedb.docentes
( `id_docente` INT NOT NULL AUTO_INCREMENT , 
`nombre_docente` VARCHAR(200) NOT NULL , 
`apellido` VARCHAR(200) NOT NULL , 
`telefono` VARCHAR(200) NOT NULL , 
`titulo` VARCHAR(100) NOT NULL , 
`foto` VARCHAR(100) NULL ,
`creado_por` VARCHAR(100) NOT NULL , 
`fecha_creacion` TIMESTAMP NOT NULL ,
 PRIMARY KEY (`id_docente`)) ENGINE = InnoDB;
");
$conexion->query("CREATE TABLE $namedb.asignaturas 
( `id_asignatura` INT NOT NULL AUTO_INCREMENT , 
`asignatura` VARCHAR(200) NULL , 
`curso` VARCHAR(100) NULL , 
`docente` VARCHAR(100) NULL , 
`estado` VARCHAR(100) NULL , 
`creado_por` VARCHAR(100) NOT NULL , 
`fecha_creacion` TIMESTAMP NOT NULL , 
PRIMARY KEY (`id_asignatura`)) ENGINE = InnoDB;
");



    header("location:../views/creador_user.php?empresa=$namedb");
    
?>