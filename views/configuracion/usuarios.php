<?php 
include("../menu_lateral.php");
$usuarios_tb = $conexion->query("SELECT * FROM $institucion.usuarios");
?>  
<link rel="stylesheet" href="../../css/reporte.css">
<div id="perfil_estudiante" class="row" >
    <div style="background-color: white; width:80%; margin-top:50px;padding:40px; margin-left:8%;">
    <h3>Usuarios</h3>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Usuario</th>
      <th scope="col">Rol</th>
      <th scope="col">Accion</th>
    </tr>
  </thead>
  <tbody>
  <?php
    while($usuarios = $usuarios_tb->fetch_assoc()){
      ?>
        <tr>
          <th scope="row"><?php echo $usuarios["nombre"] ?></th>
          <td><?php echo $usuarios["user_nombre"] ?></td>
          <td><?php echo $usuarios["rol"]; ?></td>
          <td>
            <a class="btn btn-warning" href="editar_user.php?id=<?php echo $usuarios['id_user']; ?>" >
              <i class="fa fa-pencil"></i>
            </a>
            <button data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $usuarios["id_user"];?>" style="margin-left:5px"  class="btn btn-danger">
              <i class="fa fa-trash"></i>
            </button>
          </td>
        </tr>
        <!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $usuarios["id_user"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel<?php echo $usuarios["id_user"] ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel<?php echo $usuarios["id_user"] ?>">Eliminar usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Desea eliminar el usuario: <?php echo $usuarios["user_nombre"] ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="../../scripts/usuarios/eliminar.php?id=<?php echo $usuarios['id_user']?>" type="button" class="btn btn-danger">Eliminar</a>
      </div>
    </div>
  </div>
</div>
      <?php
    }
  ?>
  </tbody>
</table>
    <a href="nuevo_user.php"><button class="btn btn-secondary">Nuevo usuario</button> </a>
    </div>  
</div>
<?php 
  if(isset($_GET["back"])){
    ?>
    <script>
       $(document).ready(function(){
            Swal.fire({
            title: 'Usuario eliminado',
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


