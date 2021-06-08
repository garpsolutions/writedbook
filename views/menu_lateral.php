<?php
session_start();
    if(isset($_SESSION['user'])){
    include("../../backend/conexion/cone.php"); 
    $institucion = $_SESSION['institucion'];
    $rol =  $_SESSION['rol'];
    $nombre =  $_SESSION['nombre'];
    $usuario =  $_SESSION['user'];
    $permisos= $conexion->query("SELECT * FROM $institucion.permisos where rol = '$rol'");
    $permisos_user = $permisos->fetch_assoc();
?>
<div id="menu_lateral">
    <!-- Menu ancho -->
    <div id="menu-ancho">
        <div id="logo">GARP WritedBook</div>
        <div class="row">
            <div class="col-md-3">
                <img src="../../img/tes.png" id="perfil" width="60" alt="">
            </div>
            <div class="col-md-9" >
                <div class="bienvenido">
                <small>Bienvenido <br>
                    <strong><?php echo $nombre ?></strong> </small> 
                </div>  
            </div>
        </div>
<?php
if($permisos_user['estudiantes']==1){
?>
        <div id="estudiantes-ancho" class="opciones-menu-ancho row">
                <div class="col-md-10" style="padding-bottom:10px;">
                    <i class="fa fa-folder"></i> Estudiantes 
                </div>
                <div class="col-md-2">
                    +
                </div>
            <div class="submenu-ancho estudiantes-menu-ancho">
                <div>
                <a href="../estudiantes/estudiantes.php">Inscripciones</a>
                    <hr>
                </div>
                <div>
                <a href="../estudiantes/lista.php">Estudiantes</a>
                   <hr>
                </div> 
            </div>
        </div>
<?php
    }
  
if($permisos_user['asignaturas']==1){
?>
        <div id="docentes-ancho" class="opciones-menu-ancho row" >
            <div class="col-md-10" style="padding-bottom:10px;">
            <i class="fa fa-address-book"></i> Asignaturas
                </div>
                <div class="col-md-2">
                    +
                </div>
            <div class="submenu-ancho docentes-menu-ancho">
                
            <div>
                <a href="../asignaturas/crear_asignatura.php">Crear Asignatura</a>
                    <hr>
                </div>

                <div>
                <a href="../proyectos/nuevo.php">Planificación</a>
                    <hr>
                </div>
                <div>
                <a href="../asignaturas/pasoasignaturas.php">Registrar Notas</a>
                   <hr>
                </div>

                <div>
                <a href="../asignaturas/lista_de_asignaturas.php">Lista de Asignaturas</a>
                   <hr>
                </div>

                <div>
                <a href="../asignaturas/asistencia.php">Registrar Asistencias</a>
                   <hr>
                </div>
            </div>
        </div>
<?php
    }
if($permisos_user['cursos']==1){
?>
        <div id="cursos-ancho" class="opciones-menu-ancho row">
            <div class="col-md-10" style="padding-bottom:10px;">
            <i class="fa fa-codepen"></i> Cursos
            </div>
            <div class="col-md-2">
                +
            </div>
            <div class="submenu-ancho cursos-menu-ancho">
                <div>
                    <a href="../cursos/creacion_de_cursos.php">Crear Curso</a>
                    <hr>
                </div>
                <div>
                    <a href="../cursos/creacion_de_aulas.php">Crear Aulas</a>
                   <hr>
                </div>
                <div>
                    <a href="../cursos/add_estudiante.php">Listado de Aulas</a>
                   <hr>
                </div>
            </div>
        </div>
<?php
    }
if($permisos_user['nomina']==1){
?>
        <div id="nomina-ancho" class="opciones-menu-ancho row">
            <div class="col-md-10" style="padding-bottom:10px;">
            <i class="fa fa-user-secret"></i> RRHH
            </div>
            <div class="col-md-2">
                +
            </div>
            <div class="submenu-ancho nomina-menu-ancho">
                <div>
                    <a href="../rrhh/registrar.php">Registrar</a>
                    <hr>
                </div>
                <?php
                    if($permisos_user['empleados']==1){
                ?>
                    <div>
                        <a href="../rrhh/empleados.php">Empleados</a>
                        <hr>
                    </div>
                <?php
                    }
                ?>
                <?php
                    if($permisos_user['docentes']==1){
                ?>
                    <div>
                        <a href="../rrhh/docentes.php">Docentes</a>
                        <hr>
                    </div>
                <?php
                    }
                ?>
                <div>
                    <a href="../rrhh/nomina.php">Nómina</a>
                   <hr>
                </div>
                <div>
                    <a href="../rrhh/solicitud.php">Solicitud</a>
                   <hr>
                </div>
            </div>
        </div>
<?php
    }
if($permisos_user['reportes']==1){
?>
        <div id="reportes-ancho" class="opciones-menu-ancho row">
           <a href="../reportes/reportes.php">  <div class="col-md-10" style="padding-bottom:10px;">
                <i class="fa fa-list-alt"></i> Reportes
            </div>
            </a>    
        </div>
<?php
    }
if($permisos_user['contabilidad']==1){
?>
        <div id="contabilidad-ancho" class="opciones-menu-ancho row">
            <div class="col-md-10" style="padding-bottom:10px;">
                <i class="fa fa-calculator "></i> Contabilidad
            </div>
            <div class="col-md-2">
                +
            </div>
            <div class="submenu-ancho contabilidad-menu-ancho">
                <div>
                <a href="../proyectos/nuevo.php">606</a>
                    <hr>
                </div>
                <div>
                <a href="../proyectos/ver_proyectos.php">Diario</a>
                   <hr>
                </div>
            </div>
        </div>
<?php
}
?>
        <div class="opciones-menu-ancho">
        <i class="fa fa-pie-chart"></i>
        Dashboard
        </div>
<?php
if($permisos_user['configuracion']==1){
?>
        <div id="config-ancho" class="opciones-menu-ancho row">
            <div class="col-md-10" style="padding-bottom:10px;">
                <i class="fa fa-calculator "></i> Configuración
            </div>
            <div class="col-md-2">
                +
            </div>
            <div class="submenu-ancho config-menu-ancho">
                <div>
                <a href="../configuracion/informacion.php">Información institucional</a>
                    <hr>
                </div>
                <div>
                <a href="../configuracion/usuarios.php">Usuarios</a>
                   <hr>
                </div>
                <div>
                <a href="../configuracion/lista_roles.php">Roles</a>
                   <hr>
                </div>
            </div>
        </div>
<?php
    }
?>
    </div>


     <!-- fin del Menu ancho -->
    <!-- Menu estrecho -->



    <div id="menu-estrecho" style="display: none;">
        <div id="logo">GARP</div>
        <div class="row">
            <center>
                <img src="../../img/tes.png" id="perfil" width="50" alt="">
                
            </center>
        </div>
        <div class="opciones-menu-estrecho">
            <center>
                <i class="fa fa-folder" style="font-size: 30px;"></i>
                <p class="texto-menu-estrecho">Proyectos</p>
            </center>
        </div>
        <div class="opciones-menu-estrecho">
            <center>
                <i class="fa fa-address-book" style="font-size: 30px;"></i>
                <p class="texto-menu-estrecho">Clientes</p>
            </center>
        </div>
        <div class="opciones-menu-estrecho">
            
                <i class="fa fa-users" style="font-size: 30px;"></i>
                <p class="texto-menu-estrecho textos_largos">Proveedores</p>
            
        </div>
        <div class="opciones-menu-estrecho">
            <center>
                <i class="fa fa-list-alt fa-2x"></i>
                <p class="texto-menu-estrecho">Reportes</p> 
            </center>
            
        </div>
        <div class="opciones-menu-estrecho">
            <center>
                <i class="fa fa-calculator fa-2x"></i>
                <p class="texto-menu-estrecho textos_largos">Contabilidad</p>
            </center>
        </div>
        <div class="opciones-menu-estrecho">
            <center>
                <i class="fa fa-pie-chart" style="font-size: 40px;"></i>
                <p class="texto-menu-estrecho textos_largos">Dashboard</p>
            </center>
        </div>
        <div class="opciones-menu-estrecho">
            <center>
            <i class="fa fa-sliders fa-2x"></i>
            <p class="texto-menu-estrecho textos_largos">Configuracion</p>
            </center>
        </div>
    </div>
</div>

<?php 
include("../menu_top.php"); 
?>
<div style="height:fit-content; min-height:91.5%;" >
  
<script>
    $("#boton-togle").click(function(){
        $("#menu-ancho").toggle();
        $("#menu-estrecho").toggle();
    });
    $("#estudiantes-ancho").click(function(){
        $(".estudiantes-menu-ancho").toggle();
    });
    $("#docentes-ancho").click(function(){
        $(".docentes-menu-ancho").toggle();
    });
    $("#asignaturas-ancho").click(function(){
        $(".asignaturas-menu-ancho").toggle();
    });
    $("#reportes-ancho").click(function(){
        $(".reportes-menu-ancho").toggle();
    });
    $("#contabilidad-ancho").click(function(){
        $(".contabilidad-menu-ancho").toggle();
    });
    $("#configuracion-ancho").click(function(){
        $(".configuracion-menu-ancho").toggle();
    });
    $("#analisis-ancho").click(function(){
        $(".analisis-menu-ancho").toggle();
    });
    $("#nomina-ancho").click(function(){
        $(".nomina-menu-ancho").toggle();
    });
    $("#promociones-ancho").click(function(){
        $(".promociones-menu-ancho").toggle();
    });
    $("#cursos-ancho").click(function(){
        $(".cursos-menu-ancho").toggle();
    });
    $("#config-ancho").click(function(){
        $(".config-menu-ancho").toggle();
    });

</script>
<?php
}
else{
    header('location:../login/login.php');
}
?>