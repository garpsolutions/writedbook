<?php 
include("../menu_lateral.php"); 

$unidades_db=$conexion->query("SELECT * FROM $institucion.unidades WHERE creado_por='$usuario'");
?>
<div id="form-estudiantes" style="background-color: white; margin-top:30px; width:75%; padding:20px; margin-left:300px;">
        <h3>Planificaciones</h3>
        <div class="row">
            <div class="col-md-4 " style="padding:20px;">
                Temas <br>
                <form action="" id="temas">
                    <input type="hidden" name="unidad" value="<?php echo $_GET["id"] ?>">
                    <div class="row">
                        <div class="col-md-12"><br>
                            <input type="text" class="form-control" placeholder="Nombre del tema" name="tema" id="tema">
                        </div>
                        <div class="col-md-6"><br>
                            <label for="">Fecha de inicio</label>
                            <input type="date" class="form-control" name="fecha_inicio" id="">
                        </div>
                        <div class="col-md-6"><br>
                            <label for="">Fecha de cierre</label>
                            <input type="date" class="form-control" name="fecha_cierre" id="">
                        </div>
                        <div class="col-md-12"><br>
                            <button class="btn btn-primary form-control"><small>Agregar tema</small></button><br>
                        </div>
                        <div class="col-md-12" style="margin-top:20px; padding:10px;" id="lista_temas">
                            
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4" style="border-left:solid 4px gray; padding:20px">
                Items <br>
                <div class="row">
                    <div class="col-md-12"><br>
                        <input type="text" class="form-control" disabled placeholder="Nombre del nuevo item"name="item" id="">
                    </div>
                    <div class="col-md-12"> <br>
                        <a class="btn btn-primary form-control">Agregar</a>
                    </div>
                    <div class="col-md-12"> <br>
                        <a class="btn btn-primary form-control">Ver Items</a>
                    </div>
                </div>
            </div>    
                
            <div class="col-md-4" style="border-left:solid 4px gray; padding:20px" >
                Actividades <br>
                <div class="row">
                <div class="col-md-12"><br>
                        <textarea name="" placeholder="Descripcion"disabled class="form-control" id="" cols="30" rows="5"></textarea>
                    </div>
                    <div class="col-md-12"> <br>
                        <a class="btn btn-primary form-control">Agregar</a>
                    </div>
                    <div class="col-md-12"> <br>
                        <a class="btn btn-primary form-control">Ver actividades</a>
                    </div>
                </div>
            </div>    
        </div>
        <button class="btn btn-secondary">Cancelar</button>
        <button class="btn btn-success">Guardar</button>

</div>
<?php 
  if(isset($_GET["back"])){
    ?>
    <script>
       $(document).ready(function(){
            Swal.fire({
            title: 'Unidad creada',
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
<?php 
  if(isset($_GET["mayor"])){
    ?>
    <script>
       $(document).ready(function(){
            Swal.fire({
            title: 'La fecha de inicio no puede ser una fecha despues del cierre',
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
//agregar tema
     $('#temas').submit(function (ev) {
        if($('#tema').val()!= '')
        {
            $.ajax({
                type: 'post', 
                url:'../../scripts/asignaturas/agregar_tema.php',
                data: $('#temas').serialize(),
                success: function (data) { 
                    $("#lista_temas").append(data);
                } 
            });
            ev.preventDefault();
        }
        else{
            alert('El asiento debe tener un identificativo');
        }
    });
</script>