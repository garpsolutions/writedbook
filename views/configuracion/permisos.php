<?php 
include("../menu_lateral.php"); 
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
                    <input type="checkbox" name="ver_estudiantes" id=""><br>
                    Agregar
                    <input type="checkbox" name="agregar_estudiantes" id=""><br>
                    Editar
                    <input type="checkbox" name="editar_estudiantes" id="">
                    <hr>    
                </div>
                <div class="col-md-4">
                    <strong>Docentes</strong><br>
                    ver
                    <input type="checkbox" name="ver_docentes" id=""><br>
                    Agregar
                    <input type="checkbox" name="agregar_docentes" id=""><br>
                    Editar
                    <input type="checkbox" name="editar_docentes" id="">
                    <hr> 
                </div>
                <div class="col-md-4">
                    <strong>Asignaturas</strong><br>
                    ver
                    <input type="checkbox" name="ver_asignaturas" id=""><br>
                    Agregar
                    <input type="checkbox" name="agregar_asignaturas" id=""><br>
                    Editar
                    <input type="checkbox" name="editar_asignaturas" id="">
                    <hr>
                </div>
                <div class="col-md-4">
                <strong>Cursos</strong><br>
                    ver
                    <input type="checkbox" name="ver_cursos" id=""><br>
                    Agregar
                    <input type="checkbox" name="agregar_cursos" id=""><br>
                    Editar
                    <input type="checkbox" name="editar_cursos" id="">
                    <hr>
                </div>
                <div class="col-md-4">
                    <strong>Empleados</strong><br>
                    ver
                    <input type="checkbox" name="ver_empleados" id=""><br>
                    Agregar
                    <input type="checkbox" name="agregar_empleados" id=""><br>
                    Editar
                    <input type="checkbox" name="editar_empleados" id="">
                    <hr>
                </div>
                <div class="col-md-4">
                    <strong>Nomina</strong><br>
                    ver
                    <input type="checkbox" name="ver_nomina" id=""><br>
                    Agregar
                    <input type="checkbox" name="agregar_nomina" id=""><br>
                    Editar
                    <input type="checkbox" name="editar_nomina" id="">
                    <hr>
                </div>
                <div class="col-md-4">
                    <strong>Reportes</strong><br>
                    ver
                    <input type="checkbox" name="ver_reportes" id=""><br>
                    Agregar
                    <input type="checkbox" name="estudiantes" disabled id=""><br>
                    Editar
                    <input type="checkbox" name="estudiantes" disabled id="">
                    <hr>
                </div>
                <div class="col-md-4">
                    <strong>Contabilidad</strong><br>
                    Ver
                    <input type="checkbox" name="ver_contabilidad" id=""><br>
                    Agregar
                    <input type="checkbox" name="agregar_contabilidad" id=""><br>
                    Editar
                    <input type="checkbox" name="editar_contabilidad" id="">
                    <hr>
                </div>
                <div class="col-md-4">
                    <strong>Configuracion</strong><br>
                    informacion
                    <input type="checkbox" name="configuracion" id=""><br>
                    Usuarios
                    <input type="checkbox" name="usuarios" id=""><br>
                    Roles
                    <input type="checkbox" name="roles" id="">
                    <hr>
                </div>
                <div class="col-md-6"><br>
                    <a id="anterior1" class="btn btn-danger">Atras</a>
                    <button class="btn btn-success">Guardar</button>
                </div>
            </div>
        </div>
    </form>
    </div>
</div>