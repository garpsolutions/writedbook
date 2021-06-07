<?php 
    include("../menu_lateral.php");
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
<div id="form-estudiantes" style="background-color: white; margin-top:50px; width:75%; padding:20px; margin-left:300px;">
<form action="../../scripts/rrhh/agregar_docente.php" method="post">
    <div>
        <h5>Creacion docente</h5><br>
        <div class="row">
            <div class="col-md-6">
                <small>Vinculacion de empleado</small>
                <select class="form-control" name="id" id="empleado">
                    <?php 
                        while($empleados = $empleados_db->fetch_assoc()){
                    ?>
                        <option value="<?php echo $empleados['id_empleado']?>"><?php echo $empleados["nombre"]?></option>
                    <?php 
                        }
                    ?>
                </select>
                <input type="hidden" name="id" id="id_oculto" value="<?php echo $empleados2['id_empleado']?>" disabled>
            </div>
            <div class="col-md-6">
                <small>Vinculacion de usuario</small>
                <select class="form-control" name="usuario" id="usuario">
                    <?php 
                        while($usuarios = $usuarios_db->fetch_assoc()){
                    ?>
                        <option value="<?php echo $usuarios['nombre']?>"><?php echo $usuarios["nombre"]?></option>
                    <?php 
                        }
                    ?>
                </select>
                <input type="hidden" name="usuario" id="usuario_oculto" value="<?php echo $usuarios2["nombre"]?>" disabled>
                <input type="hidden" name="usuario" id="id_docente" value="<?php echo $id_docente?>" disabled>

            </div>
        </div><br>
        
        <div class="row">
            <div class="col-md-6">
                <small>Materias que puede impartir</small>
                <div class="row">
                    <div class="col-md-8">
                        <select name="materia" class="form-control" id="">
                            <option value="1">Matematica</option>
                            <option value="2">Sociales</option>
                            <option value="3">Lengua Española</option>
                        </select> <br>
                        <select name="tanda" id="tanda" class="form-control">
                            <option value="Matutino">Matutino</option>
                            <option value="Vespertino">Vespertino</option>
                            <option value="Nocturno">Nocturno</option>
                            <option value="Matutino/Vespertino">Matutino/Vespertino</option>
                            <option value="Matutino/Nocturno">Matutino/Nocturno</option>
                            <option value="Vespertino/Nocturno">Vespertino/Nocturno</option>
                        </select> <br>
                        
                        <a href="../../scripts/rrhh/cancelar_docente.php?id=<?php echo $id_docente ?>" class="btn btn-secondary">Cancelar </a>
                        <a class="btn btn-Success" id="finalizar">Finalizar </a>
                    </div>
                    <div class="col-md-4">
                        <input class="btn btn-primary" type="submit" value="+">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <small>Materias agregadas</small>
                <div style="border:solid 1px rgb(180, 179, 179); border-radius:10px; padding:15px;">
                    <?php if(isset($_GET["add_materia"]))
                    {

                        while($relacion = $relacion_db->fetch_assoc()){
                        ?>
                            <div class="row" style="padding: 10px;">
                                <div class="col-md-8">Matematicas </div>
                                <div class="col-md-4"> <a href="../../rrhh/cancelar_materia.php" class="btn btn-danger">x</a></div>
                            </div>
                            <script>
                                $("#empleado").attr("disabled",true);
                                $("#id_oculto").attr("disabled",false);
                                $("#usuario_oculto").attr("disabled",false);
                                $("#id_docente").attr("disabled",false);
                                $("#usuario").attr("disabled",true);
                            </script>
                        <?php 
                        }
                    
                    }else
                    {
                        ?>
                            No hay asignaturas cargadas
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>

<script>
$("#finalizar").click(function(){
    var tanda = $("#tanda").val();
    $.ajax({
        url:'../../scripts/rrhh/finalizar_docente.php',
        type:'post',
        dataType:'html',
        data:'tanda='+tanda
    });
    $(location).attr('href','docentes.php');
});
</script>