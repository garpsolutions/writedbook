<?php

$empleados_db = $conexion->query("SELECT id_empleado, nombre FROM $institucion.empleados");
if(isset($_GET['add_materia'])){
    $id_docente=$_GET["add_materia"];
    $relacion_db = $conexion->query("SELECT * FROM $institucion.relacion_rad where id_docente = $id_docente");
    $docente_db = $conexion->query("SELECT id_empleado, nombre, tanda, usuario FROM $institucion.docentes where id_docente = $id_docente");
    $docente= $docente_db->fetch_assoc();
    $tandas=$docente["tanda"];
    $empleado_docente= $docente["id_empleado"];

    $empleados_db = $conexion->query("SELECT id_empleado, nombre FROM $institucion.empleados where id_empleado =  $empleado_docente");
    $empleados_db2 = $conexion->query("SELECT id_empleado, nombre FROM $institucion.empleados where id_empleado =  $empleado_docente");
    $empleados2 =$empleados_db2->fetch_assoc();
}
else{
    $empleados_db = $conexion->query("SELECT id_empleado, nombre FROM $institucion.empleados");
    $empleados_db2 = $conexion->query("SELECT id_empleado, nombre FROM $institucion.empleados");
    $empleados2=$empleados_db2->fetch_assoc();

}

$usuarios_db = $conexion->query("SELECT nombre FROM $institucion.usuarios");
$usuarios_db2 = $conexion->query("SELECT nombre FROM $institucion.usuarios");
$usuarios2=$usuarios_db2->fetch_assoc();

?>