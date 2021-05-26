<?php 
include("../menu_lateral.php");
$roles_tb = $conexion->query("SELECT * FROM $institucion.roles");
?>  
<link rel="stylesheet" href="../../css/reporte.css">
<div id="perfil_estudiante" class="row" >
    <div style="background-color: white; width:80%; margin-top:50px;padding:40px; margin-left:8%;">
    <h3>Roles</h3>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre del rol</th>
      <th scope="col">Accion</th>
    </tr>
  </thead>
  <tbody>
  <?php
    while($rol = $roles_tb->fetch_assoc()){
      ?>
        <tr>
          <th scope="row"><?php echo $rol["nombre"] ?></th>
          <td><a href="editar_roles.php?rol=<?php echo $rol["nombre"] ?>" class=" btn btn-warning"><i class="fa fa-pencil"></i></a><button data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $rol["id_rol"] ?>" style="margin-left:5px"  class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
        </tr>
        <!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $rol["id_rol"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel<?php echo $rol["id_rol"] ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel<?php echo $rol["nombre"] ?>">Eliminar usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Seguro que desea eliminar este rol?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="../../scripts/roles/eliminar.php?id=<?php echo $rol["id_rol"] ?>" class="btn btn-danger">Eliminar</a>
      </div>
    </div>
  </div>
</div>
      <?php
    }
  ?>
  </tbody>
</table>
    <a href="roles.php"><button class="btn btn-secondary">Nuevo rol</button> </a>
    </div>  
</div>

<?php 
  if(isset($_GET["back"])){
    ?>
    <script>
       $(document).ready(function(){
            Swal.fire({
            title: 'Rol eliminado',
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