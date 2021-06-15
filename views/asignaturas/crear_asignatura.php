<?php 
include("../menu_lateral.php");
$asignaturas_db = $conexion->query("SELECT id_asignatura FROM $institucion.asignaturas ORDER BY id_asignatura DESC LIMIT 1");
$existencia= $asignaturas_db->num_rows;
if($existencia < 1){
    $codigo_numero= 1;
}
else{
    $id_ultima_asignatura = $asignaturas_db->fetch_assoc();
    $codigo_numero= $id_ultima_asignatura["id_asignatura"] + 1;
}

?>
<div id="form-estudiantes" style="background-color: white; margin-top:50px; width:60%; padding:20px; margin-left:300px;">
    <div>
    <form action="../../scripts/asignaturas/agregar.php" method="post">
      <h3> Creacion de asignatura </h3> 
        <div class="row">
    <input type="hidden" id="numero" value="<?php echo $codigo_numero ?>">
    <input type="hidden" id="codigo2" name="codigo" value="<?php echo $codigo_numero ?>" required>

        <div class="col-md-6"><br>
        <label for=""> Codigo de la Materia</label>
                <input class="form-control" disabled type="text" style="text-transform:uppercase;"  placeholder="Codigo"  id="codigo" required>
        </div>

        <div class="col-md-6"><br>
        <label for=""> Nombre de la Materia</label>
                <input class="form-control" type="text"  style="text-transform:uppercase;" placeholder="Sociales, Matematicas..." name="nombre" id="nombre" required>
        </div>

        <div class="col-md-6"><br>
        <label for=""> Seleccione el Tipo de Asignatura</label>
            <select class="form-control" name="tipo" id="tipo"    >
                <option value="Basica">Basica</option>
                <option value="Tecnica">Tecnica</option>
                <option value="Extracurricular">Extraricular</option>
                <option value="Metodologica">Metodologica</option>
                <option value="Otras">Otras</option>
            </select>
            </div>

         
            
        <div class="col-md-6"><br>
        <label for="">
                    Seleccione Nivel Educativo</label>
            <select class="form-control" name="nivel" id="nivel"    >
                <option value="Inicial">Educacion Inicial</option>
                <option value="Basica">Educacion Basica</option>
                <option value="Media">Educacion Media</option>
                <option value="Tecnica">Educacion Tecnico</option>
              
            </select>
            </div>

           <div class="col-md-12"><br>
                <button id="guardar" class="btn btn-success">Guardar</button>
            </div>
        
        </form>
        </div>
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
        var numero_db = $("#numero").val();
        var materia = $("#nombre").val();
        var tipo =  $("#tipo").val();
        var nivel =  $("#nivel").val();
        inicial_materia= materia[0];
        inicial_tipo = tipo[0];
        inicial_nivel = nivel[0];
        if(numero_db.length == 1){
            ceros = "-00"+numero_db;
        }
        if(numero_db.length == 2){
            ceros = "-0"+numero_db;
        }
        codigo = inicial_materia+inicial_nivel+inicial_tipo+ceros;
        $("#codigo2").val(codigo);
        $("#codigo").val(codigo);
    });
    $("#nivel").change(function(){
        var numero_db = $("#numero").val();
        var materia = $("#nombre").val();
        var tipo =  $("#tipo").val();
        var nivel =  $("#nivel").val();
        inicial_materia= materia[0];
        inicial_tipo = tipo[0];
        inicial_nivel = nivel[0];
        if(numero_db.length == 1){
            ceros = "-00"+numero_db;
        }
        if(numero_db.length == 2){
            ceros = "-0"+numero_db;
        }
        codigo = inicial_materia+inicial_nivel+inicial_tipo+ceros;
        $("#codigo2").val(codigo);
        $("#codigo").val(codigo);
    });
    $("#tipo").change(function(){
        var numero_db = $("#numero").val();
        var materia = $("#nombre").val();
        var tipo =  $("#tipo").val();
        var nivel =  $("#nivel").val();
        inicial_materia= materia[0];
        inicial_tipo = tipo[0];
        inicial_nivel = nivel[0];
        if(numero_db.length == 1){
            ceros = "-00"+numero_db;
        }
        if(numero_db.length == 2){
            ceros = "-0"+numero_db;
        }
        codigo = inicial_materia+inicial_nivel+inicial_tipo+ceros;
        $("#codigo2").val(codigo);
        $("#codigo").val(codigo);
    });
    

</script>