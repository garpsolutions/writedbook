<?php 
// datos recibidos desde el formulario del login
    $usuario = $_POST["user"];
    $contrasena = $_POST["pass"];
    $institucion= $_POST["institucion"];
    
//conexion
    $conexion = new mysqli('localhost','root','');

//verificacion de existencia en la tabla de usuarios
$existencia = $conexion->query("SHOW DATABASES LIKE $institucion");
if($existencia == null){
    header("location:../../views/login/login.php?credenciales=1");
}

try{
    $usuario_db = $conexion->query("SELECT * from $institucion.usuarios where user_nombre = '$usuario' and user_password= '$contrasena'");
    $verificacion_existencia = $usuario_db->num_rows;
}
catch (Exception $e) {
    header("location:../../views/login/login.php?credenciales=0");
}

//asignacion del rol del usuario a la variable normal para luego asignar a la variable global rol
    $user = $usuario_db->fetch_assoc();
    $rol= $user["rol"];

// start a session
session_start();

// initialize session variables
$_SESSION['user'] = $usuario;
$_SESSION['rol']= $rol;
$_SESSION['institucion']= $institucion;

if($verificacion_existencia==1){
    header("location:../../views/home/");
}
else{
    header("location:../../views/login/login.php?credenciales=0");
}
?>