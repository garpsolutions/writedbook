<?php 
include("../menu_lateral.php");

$id = $_GET["rol"];

$permisos_db = $conexion->query("SELECT * FROM $institucion.permisos where rol='$id'");
$permiso = $permisos_db->fetch_assoc();

?> 
<div id="form-estudiantes" style="background-color: white; margin-top:50px; width:60%; padding-bottom:50px !important; padding:20px; margin-left:24%;">
    <div>
    <?php $rol= $_GET["rol"]; ?>
      <h3>Permisos</h3>
      <form action="../../scripts/roles/permisos.php" method="post"> 
        <input type="hidden" value="<?php echo $rol?>" name="rol">
        <div class="row"><br>
            <div class="row"><br>
                <div class="col-md-4">
                    <strong>Estudiantes</strong><br>
                    ver
                    <input type="checkbox" <?php if($permiso["estudiantes_ver"]==1){?> checked <?php } ?> name="ver_estudiantes" id=""><br>
                    Agregar
                    <input type="checkbox" <?php if($permiso["estudiantes_agregar"]==1){?> checked <?php } ?> name="agregar_estudiantes" id=""><br>
                    Editar
                    <input type="checkbox" <?php if($permiso["estudiantes_editar"]==1){?> checked <?php } ?> name="editar_estudiantes" id="">
                    <hr>    
                </div>
                <div class="col-md-4">
                    <strong>Docentes</strong><br>
                    ver
                    <input type="checkbox"<?php if($permiso["docentes_ver"]==1){?> checked <?php } ?> name="ver_docentes" id=""><br>
                    Agregar
                    <input type="checkbox"<?php if($permiso["docentes_agregar"]==1){?> checked <?php } ?> name="agregar_docentes" id=""><br>
                    Editar
                    <input type="checkbox"<?php if($permiso["docentes_editar"]==1){?> checked <?php } ?> name="editar_docentes" id="">
                    <hr> 
                </div>
                <div class="col-md-4">
                    <strong>Asignaturas</strong><br>
                    ver
                    <input type="checkbox"<?php if($permiso["asignaturas_ver"]==1){?> checked <?php } ?> name="ver_asignaturas" id=""><br>
                    Agregar
                    <input type="checkbox"<?php if($permiso["asignaturas_agregar"]==1){?> checked <?php } ?> name="agregar_asignaturas" id=""><br>
                    Editar
                    <input type="checkbox"<?php if($permiso["docentes_editar"]==1){?> checked <?php } ?> name="editar_asignaturas" id="">
                    <hr>
                </div>
                <div class="col-md-4">
                <strong>Cursos</strong><br>
                    ver
                    <input type="checkbox" <?php if($permiso["cursos_ver"]==1){?> checked <?php } ?> name="ver_cursos" id=""><br>
                    Agregar
                    <input type="checkbox" <?php if($permiso["cursos_agregar"]==1){?> checked <?php } ?> name="agregar_cursos" id=""><br>
                    Editar
                    <input type="checkbox" <?php if($permiso["cursos_editar"]==1){?> checked <?php } ?> name="editar_cursos" id="">
                    <hr>
                </div>
                <div class="col-md-4">
                    <strong>Empleados</strong><br>
                    ver
                    <input type="checkbox" <?php if($permiso["empleados_ver"]==1){?> checked <?php } ?> name="ver_empleados" id=""><br>
                    Agregar
                    <input type="checkbox" <?php if($permiso["empleados_agregar"]==1){?> checked <?php } ?> name="agregar_empleados" id=""><br>
                    Editar
                    <input type="checkbox" <?php if($permiso["empleados_editar"]==1){?> checked <?php } ?> name="editar_empleados" id="">
                    <hr>
                </div>
                <div class="col-md-4">
                    <strong>Nomina</strong><br>
                    ver
                    <input type="checkbox" <?php if($permiso["nomina_ver"]==1){?> checked <?php } ?> name="ver_nomina" id=""><br>
                    Agregar
                    <input type="checkbox" <?php if($permiso["nomina_agregar"]==1){?> checked <?php } ?> name="agregar_nomina" id=""><br>
                    Editar
                    <input type="checkbox" <?php if($permiso["nomina_editar"]==1){?> checked <?php } ?> name="editar_nomina" id="">
                    <hr>
                </div>
                <div class="col-md-4">
                    <strong>Reportes</strong><br>
                    ver
                    <input type="checkbox" <?php if($permiso["reportes"]==1){?> checked <?php } ?> name="ver_reportes" id=""><br>
                    Agregar
                    <input type="checkbox" <?php if($permiso["docentes_editar"]==1){?> checked <?php } ?> name="estudiantes" disabled id=""><br>
                    Editar
                    <input type="checkbox" <?php if($permiso["docentes_editar"]==1){?> checked <?php } ?> name="estudiantes" disabled id="">
                    <hr>
                </div>
                <div class="col-md-4">
                    <strong>Contabilidad</strong><br>
                    Ver
                    <input type="checkbox" <?php if($permiso["contabilidad"]==1){?> checked <?php } ?> name="ver_contabilidad" id=""><br>
                    Agregar
                    <input type="checkbox" <?php if($permiso["docentes_editar"]==1){?> checked <?php } ?> name="agregar_contabilidad" id=""><br>
                    Editar
                    <input type="checkbox" <?php if($permiso["docentes_editar"]==1){?> checked <?php } ?> name="editar_contabilidad" id="">
                    <hr>
                </div>
                <div class="col-md-4">
                    <strong>Configuracion</strong><br>
                    informacion
                    <input type="checkbox" <?php if($permiso["configuracion"]==1){?> checked <?php } ?> name="configuracion" id=""><br>
                    Usuarios
                    <input type="checkbox" <?php if($permiso["usuarios"]==1){?> checked <?php } ?> name="usuarios" id=""><br>
                    Roles
                    <input type="checkbox" <?php if($permiso["roles"]==1){?> checked <?php } ?> name="roles" id="">
                    <hr>
                </div>
                <div class="col-md-6"><br>
                    <a href="lista_roles.php" class="btn btn-secondary">Cancelar</a>
                    <button class="btn btn-success">Guardar</button>
                </div>
            </div>
        </div>
    </form>
    </div>
</div>