<?php 
include("../menu_lateral.php"); 
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
    <tr>
      <th scope="row">Freddy Miguel</th>
      <td>FreddyMP</td>
      <td>Admin</td>
      <td><button class=" btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></button ><button style="margin-left:5px"  class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
    </tr>
    <tr>
      <th scope="row">Neitan Garcia</th>
      <td>NeitanMP</td>
      <td>Admin</td>
      <td><button class=" btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></button ><button style="margin-left:5px"class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
    </tr>
  </tbody>
</table>
    <a href="nuevo_user.php"><button class="btn btn-secondary">Nuevo usuario</button> </a>
    </div>  
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>