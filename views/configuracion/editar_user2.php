<?php 
include("../menu_lateral.php");
$roles = $conexion->query("SELECT nombre FROM $institucion.roles ORDER BY id_rol DESC");
$user=$_SESSION["user"];
$usuario_db = $conexion->query("SELECT * FROM $institucion.usuarios WHERE user_nombre= '$user'");
$usuario = $usuario_db->fetch_assoc();
?> 
<div id="form-estudiantes" style="background-color: white; margin-top:50px; width:60%; padding-bottom:50px !important; padding:20px; margin-left:24%;">
    <div>
      <h5>Editar usuario</h5>  
      <form action="../../scripts/usuarios/editar2.php" method="post">
        <input type="hidden" value="<?php echo $user?> " name="user">
        <div class="row">
            <div class="col-md-12"><br>
                <input class="form-control"  type="text" value="<?php echo $usuario['nombre'];?> " placeholder="usuario" name="usuario" id="" require>
            </div>
            <div class="col-md-6"><br>
                <input class="form-control" type="password" placeholder="Contraseña actual" name="anterior" id="" required>
            </div>
            <div class="col-md-6"><br>
                <input class="form-control" type="password" placeholder="Nueva contraseña o repetir actual" name="nueva" id="" required>
            </div>
            <div class="col-md-6"><br>
               <button class="btn btn-secondary form-control">Cancelar</button>
            </div>
            <div class="col-md-6"><br>
               <button class="btn btn-success form-control">Guardar</button>
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

<?php 
  if(isset($_GET["back2"])){
    ?>
    <script>
       $(document).ready(function(){
            Swal.fire({
            title: 'Contraseña actual incorrecta',
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