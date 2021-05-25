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
          <td><button class=" btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></button ><button data-bs-toggle="modal" data-bs-target="#exampleModal2" style="margin-left:5px"  class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
        </tr>
      <?php
    }
  ?>
  </tbody>
</table>
    <a href="nuevo_user.php"><button class="btn btn-secondary">Nuevo rol</button> </a>
    </div>  
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Historial del usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel2">Eliminar usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Seguro que desea eliminar este usuario?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger">Eliminar</button>
      </div>
    </div>
  </div>
</div>