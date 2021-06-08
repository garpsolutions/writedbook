<?php 
include("../menu_lateral.php");
$id= $_GET['id'];
$docentes_db= $conexion->query("SELECT  * FROM $institucion.docentes ORDER BY id_docente DESC");
$docentes_db_id= $conexion->query("SELECT  * FROM $institucion.docentes where id_docente = $id ORDER BY id_docente DESC");
$docentes_id=$docentes_db_id->fetch_assoc();

$usuarios_db= $conexion->query("SELECT  * FROM $institucion.usuarios ORDER BY id_user DESC");

$id_empleado=$docentes_id["id_empleado"];
$empleados_db= $conexion->query("SELECT  * FROM $institucion.empleados ORDER BY id_empleado DESC");
$empleados_db_id= $conexion->query("SELECT  * FROM $institucion.empleados  WHERE id_empleado= $id_empleado ORDER BY id_empleado DESC");
$empleados_id= $empleados_db_id->fetch_assoc();

?>

<!-- Este es el Filtro de la tabla de asiganaturas -->
<div id="form-estudiantes" style="background-color: white; margin-top:30px; width:75%; padding:20px; margin-left:300px;">
    <div>
    <form action="../../scripts/rrhh/editar_docente.php" method="post">
      <h3> Editar de Docente </h3> 
        <div  class="row">
            <input type="hidden" name="id" value="<?php echo $docentes_id['id_docente']?>">
            <div class="col-md-6"><br>
                <select name="empleado" class="form-control" id="">
                <option value="<?php echo $empleados_id['id_empleado']?>"><?php echo $empleados_id["nombre"]?></option>

                <?php 
                    while($empleados = $empleados_db->fetch_assoc()){
                ?>
                    <option value="<?php echo $empleados['id_empleado']?>"><?php echo $empleados["nombre"]?></option>
                <?php 
                    }
                ?>
                </select>
            </div>
            <div class="col-md-6"><br>
                <select name="tanda" class="form-control" id="">
                    <option value="<?php echo $docentes_id['tanda']?>"><?php echo $docentes_id["tanda"]?></option>
                    <option value="Matutino">Matutino</option>
                    <option value="Vespertino">Vespertino</option>
                    <option value="Nocturno">Nocturno</option>
                    <option value="Matutino/Vespertino">Matutino/Vespertino</option>
                    <option value="Matutino/Nocturno">Matutino/Nocturno</option>
                    <option value="Vespertino/Nocturno">Vespertino/Nocturno</option>
                </select>
            </div>
            <div class="col-md-6"><br>
            <select name="usuario" class="form-control" id="">
            <option value="<?php echo $docentes_id['usuario']?>"><?php echo $docentes_id["usuario"]?></option>
                <?php 
                    while($usuarios = $usuarios_db->fetch_assoc()){
                ?>
                    <option value="<?php echo $usuarios['nombre']?>"><?php echo $usuarios["nombre"]?></option>
                <?php 
                    }
                ?>
            </select>
            </div>
            <div class="col-md-6"><br>

                <select name="estado" class="form-control" id="">
                    <option value="<?php echo $docentes_id['estado']?>"><?php echo $docentes_id["estado"]?></option>
                    <option value="Activo">Activo</option>
                    <option value="Inactivo">Inactivo</option>

                </select>
            </div>
            <div class="col-md-6"><br>
                <a href="docentes.php" class="btn btn-secondary">Cancelar</a>
            </div>
            <div class="col-md-6"><br>
                <button href="" class="btn btn-success">Guardar</button>
            </div>
        </div>
</div>
