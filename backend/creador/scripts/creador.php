<?php
    include("../../conexion/cone.php");
    $namedb= $_POST["nombre"];
    //creacion de base de datos
    $conexion->query("CREATE DATABASE $namedb");

    //creacion de la tabla de usuarios
    $conexion->query("CREATE TABLE $namedb.usuarios
    ( `id_user` INT NOT NULL AUTO_INCREMENT , 
    `user_nombre` VARCHAR(100) NOT NULL ,
    `institucion` VARCHAR(100) NOT NULL ,
    `nombre` VARCHAR(100) NOT NULL,
    `user_password` VARCHAR(100) NOT NULL ,
    `rol` VARCHAR(100) NOT NULL DEFAULT 'admin' , 
    `creado_por` VARCHAR(100) NOT NULL DEFAULT 'System' , 
    `fecha_creacion` TIMESTAMP NOT NULL , 
    `modificado_por` VARCHAR(200) NULL , 
    `fecha_modificacion` VARCHAR(100) NULL , 
    PRIMARY KEY (`id_user`)) ENGINE = InnoDB;");

//Tabla de estudiantes
$conexion->query("CREATE TABLE $namedb.estudiantes
 ( `id_estudiante` INT NOT NULL AUTO_INCREMENT ,
 `matricula` VARCHAR(200) NULL ,
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
//Tabla de planificacion inicial
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

// tabla de los temas para las unidades
$conexion->query("CREATE TABLE $namedb.temas
 ( `id_tema` INT NOT NULL AUTO_INCREMENT , 
 `tema` VARCHAR(200) NULL , 
 `id_unidad` INT(200) NULL , 
 `fecha_inicio` VARCHAR(100) NULL , 
 `fecha_cierre` VARCHAR(100) NULL , 
 `fecha_creacion` TIMESTAMP  , 
 `creado_por` VARCHAR(100) NULL , 
 PRIMARY KEY (`id_tema`)) ENGINE = InnoDB;
");

// tabla de los items para los temas
$conexion->query("CREATE TABLE $namedb.items
 ( `id_item` INT NOT NULL AUTO_INCREMENT , 
 `id_tema` INT(200) NULL , 
 `item` VARCHAR(100) NULL , 
 `fecha_creacion` TIMESTAMP  , 
 `creado_por` VARCHAR(100) NULL , 
 PRIMARY KEY (`id_tema`)) ENGINE = InnoDB;
");

// tabla de los actividades
$conexion->query("CREATE TABLE $namedb.items
 ( `id_actividad` INT NOT NULL AUTO_INCREMENT , 
 `id_tema` INT(200) NULL , 
 `actividad` VARCHAR(100) NULL , 
 `fecha_creacion` TIMESTAMP  , 
 `creado_por` VARCHAR(100) NULL , 
 PRIMARY KEY (`id_tema`)) ENGINE = InnoDB;
");

//Tabla de reporte de conducta
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

//Tabla de actividades
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
//Tabla de solicitudes de empleo
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


//Tabla de asignaturas
$conexion->query("CREATE TABLE $namedb.asignaturas 
( `id_asignatura` INT NOT NULL AUTO_INCREMENT , 
`asignatura` VARCHAR(200) NULL ,
`codigo` VARCHAR(200) NULL ,
`tipo` VARCHAR(200) NULL ,
`nivel_academico` VARCHAR(200) NULL ,
`estado` VARCHAR(100) NULL , 
`creado_por` VARCHAR(100) NOT NULL , 
`fecha_creacion` TIMESTAMP NOT NULL , 
PRIMARY KEY (`id_asignatura`)) ENGINE = InnoDB;
");

//Tabla de docentes
$conexion->query("CREATE TABLE $namedb.docentes
( `id_docente` INT NOT NULL AUTO_INCREMENT , 
`id_empleado` VARCHAR(200) NULL ,
`nombre` VARCHAR(200) NULL ,
`tanda` VARCHAR(200) NULL ,
`usuario` VARCHAR(100) NULL,  
`estado` VARCHAR(100) NULL , 
`creado_por` VARCHAR(100) NOT NULL , 
`fecha_creacion` TIMESTAMP NOT NULL , 
PRIMARY KEY (`id_docente`)) ENGINE = InnoDB;
");
//Tabla de relaciones asignaturas, periodos, estudiantes, docentes, cursos y aulas
$conexion->query("CREATE TABLE $namedb.relaciones_asignaturas
( `id_relacion` INT NOT NULL AUTO_INCREMENT,
`id_periodo` INT(10) NULL,
`id_asignatura` INT(10) NULL,
`id_estudiante` INT(10) NULL,
`puntuacion` INT(10) NULL,
`id_docente` INT(10) NULL , 
`id_curso` INT(10) NULL,
`id_aula` INT(10) NULL,  
`estado` VARCHAR(100) NULL , 
`creado_por` VARCHAR(100) NOT NULL , 
`fecha_creacion` TIMESTAMP NOT NULL , 
PRIMARY KEY (`id_relacion`)) ENGINE = InnoDB;
");

//Tabla de calificador
$conexion->query("CREATE TABLE $namedb.calificador
( `id_relacion` INT NOT NULL AUTO_INCREMENT,
`id_asignatura` INT(10) NULL,
`id_estudiante` INT(10) NULL,
`examen` INT(10) NULL,
`participacion` INT(10) NULL,
`practicas` INT(10) NULL,
`asistencia` INT(10) NULL,
`trabajo final` INT(10) NULL,
`exposicion` INT(10) NULL,
`cuaderno` INT(10) NULL,
`cuadernillo` INT(10) NULL,
`puntuacion_total` INT(10) NULL,
`estado` VARCHAR(100) NULL , 
`creado_por` VARCHAR(100) NOT NULL , 
`fecha_creacion` TIMESTAMP NOT NULL , 
PRIMARY KEY (`id_relacion`)) ENGINE = InnoDB;
");

//Tabla de periodos
$conexion->query("CREATE TABLE $namedb.periodos
( `id_periodo` INT NOT NULL AUTO_INCREMENT,
`inicio` INT(100) NULL ,
`cierre` INT(100) NULL ,
`nombre` INT(100) NULL ,  
`estado` VARCHAR(100) NULL , 
`creado_por` VARCHAR(100) NOT NULL , 
`fecha_creacion` TIMESTAMP NOT NULL , 
PRIMARY KEY (`id_periodo`)) ENGINE = InnoDB;
");
//Tabla de informacion institucional
$conexion->query("CREATE TABLE $namedb.informacion
( `id_informacion` INT NOT NULL AUTO_INCREMENT,
`nombre` VARCHAR(100) NULL ,
`rnc` VARCHAR(100) NULL ,
`direccion` TEXT NULL ,  
`email` VARCHAR(100) NULL , 
`telefono` VARCHAR(100) NULL , 
`distrito` VARCHAR(100) NULL , 
`logo` VARCHAR(100) NULL , 
`creado_por` VARCHAR(100) NOT NULL , 
`fecha_creacion` TIMESTAMP NOT NULL , 
PRIMARY KEY (`id_informacion`)) ENGINE = InnoDB;
");

//Tabla de cursos
$conexion->query("CREATE TABLE $namedb.cursos
( `id_curso` INT NOT NULL AUTO_INCREMENT ,
`nombre` varchar(100) NULL , 
`modalidad` VARCHAR(100) NULL,
`tanda` varchar(100) NULL,
`estado` VARCHAR(100) NULL , 
`creado_por` VARCHAR(100) NOT NULL , 
`fecha_creacion` TIMESTAMP NOT NULL , 
PRIMARY KEY (`id_curso`)) ENGINE = InnoDB;
");

//Tabla de aulas
$conexion->query("CREATE TABLE $namedb.aulas
( `id_aula` INT NOT NULL AUTO_INCREMENT ,
`nombre` varchar(100) NULL , 
`curso` VARCHAR(100) NULL,
`seccion` varchar(100) NULL,
`docente` varchar(100) NULL,
`estado` VARCHAR(100) NULL , 
`creado_por` VARCHAR(100) NOT NULL , 
`fecha_creacion` TIMESTAMP NOT NULL , 
PRIMARY KEY (`id_aula`)) ENGINE = InnoDB;
");

//Tabla de relaciones asignaturas, cursos y periodos(acp)
$conexion->query("CREATE TABLE $namedb.relaciones_acp
( `id_relacion` INT NOT NULL AUTO_INCREMENT ,
`id_asignatura` INT(10) NULL , 
`id_curso` INT(10) NULL,
`id_aula` INT(10) NULL,
`id_periodo` VARCHAR(100) NULL , 
`estado` VARCHAR(100) NULL , 
`creado_por` VARCHAR(100) NOT NULL , 
`fecha_creacion` TIMESTAMP NOT NULL , 
PRIMARY KEY (`id_relacion`)) ENGINE = InnoDB;
");
//Tabla de empleados
$conexion->query("CREATE TABLE $namedb.empleados
( `id_empleado` INT NOT NULL AUTO_INCREMENT ,
`nombre` VARCHAR(100) NULL , 
`cedula` VARCHAR(100) NULL,
`telefono` VARCHAR(100) NULL,
`email` VARCHAR(100) NULL,
`puesto` VARCHAR(100) NULL,
`nacionalidad` VARCHAR(100) NULL,
`titulo_academico` VARCHAR(100) NULL,
`salario` int(10) NULL,
`direccion` TEXT NULL , 
`lugar_nacimiento` TEXT NULL ,
`estado_civil` VARCHAR(100) NULL , 
`fecha_nacimiento` VARCHAR(100) NULL , 
`departamento` VARCHAR(100) NULL , 
`tipo_contrato` VARCHAR(100) NULL , 
`nombre_contacto` VARCHAR(100) NULL , 
`parentesco_contacto` VARCHAR(100) NULL , 
`telefono_contacto` VARCHAR(100) NULL , 
`estado` VARCHAR(100) NULL , 
`creado_por` VARCHAR(100) NOT NULL , 
`fecha_creacion` TIMESTAMP NOT NULL , 
PRIMARY KEY (`id_empleado`)) ENGINE = InnoDB;
");
//Tabla de relaciones asignaturas y docentes
$conexion->query("CREATE TABLE $namedb.relacion_rad
(`id_relacion` INT NOT NULL AUTO_INCREMENT ,
`id_docente` INT(10) NULL, 
`id_asignatura` VARCHAR(100) NULL, 
`estado` VARCHAR(100) NULL, 
`creado_por` VARCHAR(100) NOT NULL , 
`fecha_creacion` TIMESTAMP NOT NULL , 
PRIMARY KEY (`id_relacion`)) ENGINE = InnoDB;
");
//Tabla de relaciones asignaturas, cursos y periodos(acp)
$conexion->query("CREATE TABLE $namedb.asistencia
(`id_asistencia` INT NOT NULL AUTO_INCREMENT ,
`id_asignatura` INT(10) NULL, 
`presente_o_no` VARCHAR(100) NULL, 
`estado` VARCHAR(100) NULL, 
`creado_por` VARCHAR(100) NOT NULL , 
`fecha_creacion` TIMESTAMP NOT NULL , 
`id_estudiante` VARCHAR(100) NULL , 
PRIMARY KEY (`id_asistencia`)) ENGINE = InnoDB;
");
//Tabla de roles
$conexion->query("CREATE TABLE $namedb.roles
(`id_rol` INT NOT NULL AUTO_INCREMENT ,
`nombre` VARCHAR(100) NULL, 
`creado_por` VARCHAR(100) NOT NULL , 
`fecha_creacion` TIMESTAMP NOT NULL , 
PRIMARY KEY (`id_rol`)) ENGINE = InnoDB;
");
//tabla de permisos de roles
$conexion->query("CREATE TABLE $namedb.permisos
(`id_permisos` INT NOT NULL AUTO_INCREMENT ,
`id_rol` VARCHAR(10)  NOT NULL DEFAULT '1', 
`rol` VARCHAR(100) NOT NULL DEFAULT 'admin', 
`estudiantes` VARCHAR(1) NOT NULL DEFAULT '1',
`estudiantes_agregar` VARCHAR(1) NOT NULL DEFAULT '1',
`estudiantes_ver` VARCHAR(1) NOT NULL DEFAULT '1',
`estudiantes_editar` VARCHAR(1) NOT NULL DEFAULT '1',
`docentes_agregar` VARCHAR(1) NOT NULL DEFAULT '1',
`docentes` VARCHAR(1) NOT NULL DEFAULT '1',
`docentes_ver` VARCHAR(1) NOT NULL DEFAULT '1',
`docentes_editar` VARCHAR(1) NOT NULL DEFAULT '1',
`asignaturas` VARCHAR(1) NOT NULL DEFAULT '1',
`asignaturas_ver` VARCHAR(1) NOT NULL DEFAULT '1',
`asignaturas_agregar` VARCHAR(1) NOT NULL DEFAULT '1',
`asignaturas_editar` VARCHAR(1) NOT NULL DEFAULT '1',
`cursos` VARCHAR(1) NOT NULL DEFAULT '1',
`cursos_ver` VARCHAR(1) NOT NULL DEFAULT '1',
`cursos_agregar` VARCHAR(1) NOT NULL DEFAULT '1',
`cursos_editar` VARCHAR(1) NOT NULL DEFAULT '1',
`aulas` VARCHAR(1) NOT NULL DEFAULT '1',
`aulas_ver` VARCHAR(1) NOT NULL DEFAULT '1',
`aulas_agregar` VARCHAR(1) NOT NULL DEFAULT '1',
`aulas_editar` VARCHAR(1) NOT NULL DEFAULT '1',
`empleados` VARCHAR(1) NOT NULL DEFAULT '1',
`empleados_ver` VARCHAR(1) NOT NULL DEFAULT '1',
`empleados_editar` VARCHAR(1) NOT NULL DEFAULT '1',
`empleados_agregar` VARCHAR(1) NOT NULL DEFAULT '1',
`nomina` VARCHAR(1) NOT NULL DEFAULT '1',
`nomina_ver` VARCHAR(1) NOT NULL DEFAULT '1',
`nomina_agregar` VARCHAR(1) NOT NULL DEFAULT '1',
`nomina_editar` VARCHAR(1) NOT NULL DEFAULT '1',
`reportes` VARCHAR(1) NOT NULL DEFAULT '1',
`contabilidad` VARCHAR(1) NOT NULL DEFAULT '1',
`configuracion` VARCHAR(1) NOT NULL DEFAULT '1',
`usuarios` VARCHAR(1) NOT NULL DEFAULT '1',
`usuarios_editar` VARCHAR(1) NOT NULL DEFAULT '1',
`usuarios_eliminar` VARCHAR(1) NOT NULL DEFAULT '1',
`informacion` VARCHAR(1) NOT NULL DEFAULT '1',
`informacion_editar` VARCHAR(1) NOT NULL DEFAULT '1',
`roles` VARCHAR(1) NOT NULL DEFAULT '1',
`estado` VARCHAR(100) NULL, 
`creado_por` VARCHAR(100) NOT NULL , 
`fecha_creacion` TIMESTAMP NOT NULL , 
`id_estudiante` VARCHAR(100) NULL , 
PRIMARY KEY (`id_permisos`)) ENGINE = InnoDB;
");

$conexion->query("CREATE TABLE $namedb.unidades
( `id_unidad` INT NOT NULL AUTO_INCREMENT , 
`nombre` VARCHAR(200) NULL , 
`asignatura` VARCHAR(200) NULL , 
`curso` VARCHAR(200) NULL , 
`fecha_inicio` DATE NULL , 
`fecha_cierre` DATE NULL , 
`creado_por` VARCHAR(100) NULL , 
`fecha_creacion` TIMESTAMP NOT NULL , 
PRIMARY KEY (`id_unidad`)) ENGINE = InnoDB;"
);
    header("location:../views/creador_user.php?empresa=$namedb"); 
?>