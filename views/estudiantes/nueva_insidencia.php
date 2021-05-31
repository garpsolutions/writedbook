<?php 
include("../menu_lateral.php");
$id=$_GET["id"];
$estudiante_db = $conexion->query("SELECT * FROM $institucion.estudiantes WHERE id_estudiante = $id");
$estudiante = $estudiante_db->fetch_assoc();
?>
<div id="form-estudiantes" style="background-color: white; margin-top:50px; width:60%; padding:20px; margin-left:300px;">
    <div>
    <form action="../../scripts/estudiantes/nueva_insidencia.php" method="post">
      <h5>Nueva insidencia</h5> 
        <div class="row">
            <div class="col-md-16"><br>
                <input class="form-control" type="text" value="<?php echo $estudiante["nombre"]." ".$estudiante["apellido_paterno"]." ".$estudiante["apellido_materno"] ?>" placeholder="Nombre del estudiante" id="" disabled>
            </div>
                <input type="hidden" value="<?php echo $id ?>" name="id">
            <div class="col-md-6"><br>
                <select class="form-control" name="tipo" id="">
                    <option value="Agresion">Agresion</option>
                    <option value="Comportamiento no adecuado">Comportamiento no adecuado</option>
                    <option value="Irrespeto">Irrespeto</option>
                    <option value="Entradas a clase">Entradas a clases</option>
                    <option value="Otros">Otros</option>
                </select>
            </div>
            <div class="col-md-6"><br>
                <input class="form-control" type="text" placeholder="Persona afectada" name="afectado" id="" required>
            </div>
            <div class="col-md-6"><br>
                <textarea class="form-control" name="detalles" rows="7" placeholder="Detalles de la insidencia"></textarea>
            </div>
            <div class="col-md-6"><br>
                <textarea class="form-control" name="recomendaciones"  rows="7" placeholder="Recomendaciones"></textarea>
            </div>
            <div class="col-md-12"><br>
                <input class="form-control" type="text" placeholder="Sancion" name="sancion" id="" require>
            </div>
            <div class="col-md-12"><br>
                <a class="btn btn-secondary" href="detalles_estudiante.php?id=<?php echo $id ?>">Cancelar</a>
                <button class="btn btn-success">Guardar</button>
            </div>
        </form>
        
        </div>
    </div>
</div>