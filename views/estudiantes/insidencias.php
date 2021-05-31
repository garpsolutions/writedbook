<?php 
include("../menu_lateral.php");
    $id=$_GET["id"];
    $insidencias_db=$conexion->query("SELECT * FROM $institucion.reportes_conducta WHERE estudiante = '$id'");
?>
<div id="form-estudiantes" style="background-color: white; margin-top:50px; width:70%; padding:20px; margin-left:24%;">
<h5>Insidencias</h5>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Num</th>
      <th scope="col">Afectados</th>
      <th scope="col">Tipo</th>
      <th scope="col">Sancion</th>
      <th scope="col">Accion</th>
    </tr>
  </thead>
  <tbody>
  <?php 
   $contador=1;
    while($insidencias = $insidencias_db->fetch_assoc()){
        $id_reporte=$insidencias["id_reporte"];
  ?>
    <tr>
      <td scope="row"><?php echo $contador;?></td>
      <td><?php echo $insidencias["afectados"]?></td>
      <td><?php echo $insidencias["tipo_reporte"]?></td>
      <td><?php echo $insidencias["decision"]?></td>
      <td><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $id_reporte?>">ver</button></td>
    </tr>

<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $id_reporte?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Insidencia</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h6>Detalles</h6>
        <div>
            <?php echo $insidencias["detalle"]?>
        </div>
        <hr>
        <h6>Recomendaciones</h6>
        <div>
            <?php echo $insidencias["recomendaciones"]?>
        </div>
        <div style="float: right;">
          <strong>Fecha <?php echo $insidencias["fecha_creacion"]?></strong> 
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<?php 
    $contador= $contador+1;}
?> 
  </tbody>
</table>
<a href="detalles_estudiante.php?id=<?php echo $id ?>"><button class="btn btn-secondary">Cancelar</button></a>
<a href="nueva_insidencia.php?id=<?php echo $id ?>"><button class="btn btn-primary">Nuevo</button></a>


</div>