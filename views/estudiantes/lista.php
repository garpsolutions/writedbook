<?php 
include("../menu_lateral.php");
$estudiantes_db= $conexion->query("SELECT id_estudiante, matricula, nombre, apellido_materno, apellido_paterno FROM $institucion.estudiantes ORDER BY id_estudiante DESC");
?>
<div id="form-estudiantes" style="background-color: white; margin-top:50px; width:60%; padding:20px; margin-left:24%;">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Matricula</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  while($estudiantes = $estudiantes_db->fetch_assoc())
  {
?>
    <tr>
      <td scope="row"><?php echo $estudiantes["matricula"] ?></td>
      <td><?php echo $estudiantes["nombre"] ?></td>
      <td><?php echo $estudiantes["apellido_paterno"]." ".$estudiantes["apellido_materno"]?></td>
      <td><a href="detalles_estudiante.php?id=<?php echo $estudiantes["id_estudiante"]?>"><button class="btn btn-primary"><i class="fa fa-eye"></i></button></a></td>
    </tr> 
    <?php 
  }
?>
  </tbody>
</table>
</div>