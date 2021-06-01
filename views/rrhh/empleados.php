<?php 
include("../menu_lateral.php");
$empleados_db = $conexion->query("SELECT id_empleado, nombre, departamento, puesto FROM $institucion.empleados");
?>
<div id="form-estudiantes" style="background-color: white; margin-top:50px; width:60%; padding:20px; margin-left:24%;">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Departamento</th>
      <th scope="col">Puesto de trabajo</th>
      <th scope="col">Accion</th>
    </tr>
  </thead>
  <tbody>
  <?php 
    while($empleados = $empleados_db->fetch_assoc()){
  ?>
    <tr>
      <td scope="row"><?php echo $empleados["nombre"] ?></td>
      <td><?php echo $empleados["departamento"] ?></td>
      <td><?php echo $empleados["puesto"] ?></td>
      <td><a class="btn btn-primary" href="detalles_empleados.php?id=<?php echo $empleados["id_empleado"];?>"><i class="fa fa-eye"></i></a></td>
    </tr> 
  <?php 
    }
  ?>
  </tbody>
</table>
</div>