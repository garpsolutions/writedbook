<?php
include("../../backend/conexion/cone.php");
//inicio de session
session_start();

//variables de session
$institucion = $_SESSION['institucion'];

$rol= $_POST["rol"];

// Confirmacion de check marcados y modificacion en la tabla de permisos
// si se recibe el check marcardo se ejecuta el query que da valor 1 al permiso correspondiente de lo contrario valor 0
// 1 = permitido
// 0 = no permitido

//estudiantes
if(isset($_POST["ver_estudiantes"])){
    $conexion->query("UPDATE $institucion.permisos SET estudiantes = '1', estudiantes_ver = '1' where rol='$rol'");
}
else{
    $conexion->query("UPDATE $institucion.permisos SET estudiantes = '0', estudiantes_ver = '0' where rol='$rol'");
}
if(isset($_POST["agregar_estudiantes"])){
    $conexion->query("UPDATE $institucion.permisos SET estudiantes_agregar = '1' where rol='$rol'");
}
else{
    $conexion->query("UPDATE $institucion.permisos SET estudiantes_agregar = '0' where rol='$rol'");

}
if(isset($_POST["editar_estudiantes"])){
    $conexion->query("UPDATE $institucion.permisos SET estudiantes_editar = '1' where rol='$rol'");
}
else{
    $conexion->query("UPDATE $institucion.permisos SET estudiantes_editar = '0' where rol='$rol'");

}
//docentes
if(isset($_POST["ver_docentes"])){
    $conexion->query("UPDATE $institucion.permisos SET docentes = '1', docentes_ver = '1' where rol='$rol'");
}
else{
    $conexion->query("UPDATE $institucion.permisos SET docentes = '0', docentes_ver = '0' where rol='$rol'");
}
if(isset($_POST["agregar_docentes"])){
    $conexion->query("UPDATE $institucion.permisos SET docentes_agregar = '1' where rol='$rol'");
}
else{
    $conexion->query("UPDATE $institucion.permisos SET docentes_agregar = '0' where rol='$rol'");
}
if(isset($_POST["editar_docentes"])){
    $conexion->query("UPDATE $institucion.permisos SET docentes_editar = '1' where rol='$rol'");
}
else{
    $conexion->query("UPDATE $institucion.permisos SET docentes_editar = '0' where rol='$rol'");
}
//asignaturas
if(isset($_POST["ver_asignaturas"])){
    $conexion->query("UPDATE $institucion.permisos SET asignaturas = '1', asignaturas_ver = '1' where rol='$rol'");
}
else{
    $conexion->query("UPDATE $institucion.permisos SET asignaturas = '0', asignaturas_ver = '0' where rol='$rol'");
}
if(isset($_POST["agregar_asignaturas"])){
    $conexion->query("UPDATE $institucion.permisos SET asignaturas_agregar = '1' where rol='$rol'");
}
else{
    $conexion->query("UPDATE $institucion.permisos SET asignaturas_agregar = '0' where rol='$rol'");
}
if(isset($_POST["editar_asignaturas"])){
    $conexion->query("UPDATE $institucion.permisos SET asignaturas_editar = '1' where rol='$rol'");
}
else{
    $conexion->query("UPDATE $institucion.permisos SET asignaturas_editar = '0' where rol='$rol'");
}

//cursos
if(isset($_POST["ver_cursos"])){
    $conexion->query("UPDATE $institucion.permisos SET cursos = '1', cursos_ver = '1' where rol='$rol'");
}
else{
    $conexion->query("UPDATE $institucion.permisos SET cursos = '0', cursos_ver = '0' where rol='$rol'");
}
if(isset($_POST["agregar_cursos"])){
    $conexion->query("UPDATE $institucion.permisos SET cursos_agregar = '1' where rol='$rol'");
}
else{
    $conexion->query("UPDATE $institucion.permisos SET cursos_agregar = '0' where rol='$rol'");
}
if(isset($_POST["editar_cursos"])){
    $conexion->query("UPDATE $institucion.permisos SET cursos_editar = '1' where rol='$rol'");
}
else{
    $conexion->query("UPDATE $institucion.permisos SET cursos_editar = '0' where rol='$rol'");
}

//empleados
if(isset($_POST["ver_empleados"])){
    $conexion->query("UPDATE $institucion.permisos SET empleados = '1', empleados_ver = '1' where rol='$rol'");
}
else{
    $conexion->query("UPDATE $institucion.permisos SET empleados = '0', empleados_ver = '0' where rol='$rol'");
}
if(isset($_POST["agregar_empleados"])){
    $conexion->query("UPDATE $institucion.permisos SET empleados_agregar = '1' where rol='$rol'");
}
else{
    $conexion->query("UPDATE $institucion.permisos SET empleados_agregar = '0' where rol='$rol'");
}
if(isset($_POST["editar_empleados"])){
    $conexion->query("UPDATE $institucion.permisos SET empleados_editar = '1' where rol='$rol'");
}
else{
    $conexion->query("UPDATE $institucion.permisos SET empleados_editar = '0' where rol='$rol'");
}

//nominas
if(isset($_POST["ver_nomina"])){
    $conexion->query("UPDATE $institucion.permisos SET nomina = '1', nomina_ver = '1' where rol='$rol'");
}
else{
    $conexion->query("UPDATE $institucion.permisos SET nomina = '0', nomina_ver = '0' where rol='$rol'");
}
if(isset($_POST["agregar_nomina"])){
    $conexion->query("UPDATE $institucion.permisos SET nomina_agregar = '1' where rol='$rol'");
}
else{
    $conexion->query("UPDATE $institucion.permisos SET nomina_agregar = '0' where rol='$rol'");
}
if(isset($_POST["editar_nomina"])){
    $conexion->query("UPDATE $institucion.permisos SET nomina_editar = '1' where rol='$rol'");
}
else{
    $conexion->query("UPDATE $institucion.permisos SET nomina_editar = '0' where rol='$rol'");
}

//reportes
if(isset($_POST["ver_reportes"])){
    $conexion->query("UPDATE $institucion.permisos SET reportes = '1' where rol='$rol'");
}
else{
    $conexion->query("UPDATE $institucion.permisos SET reportes = '0' where rol='$rol'");
}

//contabilidad
if(isset($_POST["ver_contabilidad"])){
    $conexion->query("UPDATE $institucion.permisos SET contabilidad = '1' where rol='$rol'");
}
else{
    $conexion->query("UPDATE $institucion.permisos SET contabilidad = '0' where rol='$rol'");
}
if(isset($_POST["agregar_contabilidad"])){
    $conexion->query("UPDATE $institucion.permisos SET contabilidad_agregar = '1' where rol='$rol'");
}
else{
    $conexion->query("UPDATE $institucion.permisos SET contabilidad_agregar = '0' where rol='$rol'");
}
if(isset($_POST["editar_contabilidad"])){
    $conexion->query("UPDATE $institucion.permisos SET contabilidad_editar = '1' where rol='$rol'");
}
else{
    $conexion->query("UPDATE $institucion.permisos SET contabilidad_editar = '0' where rol='$rol'");
}
//configuracion
if(isset($_POST["configuracion"])){
    $conexion->query("UPDATE $institucion.permisos SET configuracion = '1' where rol='$rol'");
}
else{
    $conexion->query("UPDATE $institucion.permisos SET configuracion = '0' where rol='$rol'");
}
if(isset($_POST["informacion"])){
    $conexion->query("UPDATE $institucion.permisos SET informacion = '1' where rol='$rol'");
}
else{
    $conexion->query("UPDATE $institucion.permisos SET informacion = '0' where rol='$rol'");
}
if(isset($_POST["informacion"])){
    $conexion->query("UPDATE $institucion.permisos SET informacion = '1' where rol='$rol'");
}
else{
    $conexion->query("UPDATE $institucion.permisos SET informacion = '0' where rol='$rol'");
}
if(isset($_POST["usuarios"])){
    $conexion->query("UPDATE $institucion.permisos SET usuarios = '1' where rol='$rol'");
}
else{
    $conexion->query("UPDATE $institucion.permisos SET usuarios = '0' where rol='$rol'");
}
if(isset($_POST["roles"])){
    $conexion->query("UPDATE $institucion.permisos SET roles = '1' where rol='$rol'");
}
else{
    $conexion->query("UPDATE $institucion.permisos SET roles = '0' where rol='$rol'");
}
header("location:../../views/configuracion/lista_roles.php");

?>