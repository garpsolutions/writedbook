<?php 
include("../menu_lateral.php");
$informacion_db = $conexion->query("SELECT * FROM $institucion.informacion");
$informacion = $informacion_db->fetch_assoc();
?>
<div id="form-estudiantes" style="background-color: white; margin-top:50px; width:60%; padding:20px; margin-left:300px;">
    <div>
    <form action="../../scripts/informacion.php" method="post">
      <h5>Información del instituto</h5> 
        <div class="row">
            <div class="col-md-6"><br>
                <input class="form-control" value="<?php echo $informacion["nombre"]; ?>" type="text" name="nombre" placeholder="Nombre completo" disabled id="" required>
            </div>
            <div class="col-md-6"><br>
                <input class="form-control" value="<?php echo $informacion["rnc"]; ?>" type="text" placeholder="RNC" name="rnc" id="" disabled required>
            </div>
            <div class="col-md-6"><br>
                <input class="form-control" value="<?php echo $informacion["distrito"]; ?>" type="text" placeholder="Distrito" name="distrito" id="" disabled required>
            </div>
            <div class="col-md-6"><br>
                <input class="form-control" value="<?php echo $informacion["direccion"]; ?>" type="text" placeholder="Dirección" name="direccion" disabled id="" required>
            </div>
            <div class="col-md-6"><br>
                <input class="form-control" value="<?php echo $informacion["email"]; ?>" type="text" placeholder="Email" name="email" disabled id="" required>
            </div>
            <div class="col-md-6"><br>
                <input class="form-control" value="<?php echo $informacion["telefono"]; ?>" type="text" placeholder="000-000-0000" name="telefono" disabled id="" required>
            </div>
            <div class="col-md-12"><br>
            <label for="">Logo</label>
                <input class="form-control" type="file" disabled  name="logo" id="" require>
            </div>
            <div class="col-md-12"><br>
                <a id="editar" class="btn btn-warning">Editar</a>
                <button class="btn btn-success">Guardar</button>
            </div>
        </form>
        </div>
    </div>
</div>
<script>
$("#editar").click(function(){
    $(".form-control").attr("disabled",false);
});
</script>
<?php 
  if(isset($_GET["back"])){
    ?>
    <script>
       $(document).ready(function(){
            Swal.fire({
            title: 'Modificaciones registradas',
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
