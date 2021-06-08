<?php 
include("../menu_lateral.php");
$id=$_GET["id"];
$asignaturas_db = $conexion->query("SELECT * FROM $institucion.asignaturas WHERE id_asignatura = $id");
$asignatura = $asignaturas_db->fetch_assoc();

?>
<div id="form-estudiantes" style="background-color: white; margin-top:50px; width:75%; padding:20px; margin-left:300px;">
    <div>
    <form action="../../scripts/asignaturas/editar_asignatura.php" method="post">
      <h3> Creacion de Asignatura </h3> 
        <div class="row">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input type="hidden" style="text-transform:uppercase;" value="<?php echo $asignatura["codigo"] ?>" id="codigo2">
            <input type="hidden" style="text-transform:uppercase;" name="codigo" id="codigo3">

            <div class="col-md-6"><br>
                <label for=""> Codigo de la Materia</label>
                <input class="form-control" disabled type="text"  style="text-transform:uppercase;" placeholder="codigo" id="codigo" required>
            </div>

            <div class="col-md-6"><br>
                <label for=""> Nombre de la Materia</label>
                <input class="form-control" value="<?php echo $asignatura["asignatura"] ?>" type="text"  style="text-transform:uppercase;" placeholder="Sociales, Matematicas..." name="nombre" id="nombre" required>
            </div>

            <div class="col-md-6"><br>
                <label for=""> Seleccione el Tipo de Asignatura</label>
                <select class="form-control" name="tipo" id="tipo">
                    <option value="<?php echo $asignatura["tipo"] ?>"><?php echo $asignatura["tipo"] ?></option>
                    <option value="Basica">Basica</option>
                    <option value="Tecnica">Tecnica</option>
                    <option value="Extracurricular">Extraricular</option>
                    <option value="Metodologica">Metodologica</option>
                    <option value="Otras">Otras</option>
                </select>
            </div>

            <div class="col-md-6"><br>
                <label for="">
                    Seleccione Nivel Educativo
                </label>
                <select class="form-control" name="nivel" id="nivel"    >
                    <option value="<?php echo $asignatura["nivel_academico"] ?>">Educacion <?php echo $asignatura["nivel_academico"] ?></option>
                    <option value="Inicial">Educacion Inicial</option>
                    <option value="Basica">Educacion Basica</option>
                    <option value="Media">Educacion Media</option>
                    <option value="Tecnica">Educacion Tecnico</option>
                </select>
            </div>

           <div class="col-md-12"><br>
                <a href="lista_de_asignaturas.php" class="btn btn-secondary">Cancelar</a>
                <button class="btn btn-success">Guardar</button>
            </div>
        </div>
    </form>
    </div>
</div>
<?php 
  if(isset($_GET["back"])){
    ?>
    <script>
       $(document).ready(function(){
            Swal.fire({
            title: 'Asignatura creada',
            showClass: {
            popup: 'animate__animated animate__fadeInDown'
        },
        hideClass: {
        popup: 'animate__animated animate__fadeOutUp'
        }
        });
      });
    </script>
<?php 
  }
?>  
<script>
    $("#nombre").keyup(function(){
        var codigo_actual = $("#codigo2").val();
        var nivel = $("#nivel").val();
        var tipo =$("#tipo").val();
        var nombre= $("#nombre").val();
        primera_nivel=nivel[0];
        primera_tipo=tipo[0];
        primera_nombre=nombre[0];
        nuevo_codigo= primera_nombre+primera_nivel+primera_tipo+codigo_actual[3]+codigo_actual[4]+codigo_actual[5]+codigo_actual[6];
        $("#codigo").val(nuevo_codigo);
        $("#codigo3").val(nuevo_codigo);
    });
</script>
