<?php 
include("../menu_lateral.php");
$docentes_db= $conexion->query("SELECT  * FROM $institucion.docentes ORDER BY id_docente DESC");
?>

<!-- Este es el Filtro de la tabla de asiganaturas -->
<div id="form-estudiantes" style="background-color: white; margin-top:30px; width:75%; padding:20px; margin-left:300px;">
    <div>
    <form action="" method="post">
      <h3> Listado de Docentes </h3> 
        <div class="row">


        <div class="col-md-2"><br>
            <select class="form-control" name="meal_preference" id="meal_preference"    >
                <option value="Santo Domingo">Materia</option>
                <option value="Santo Domingo">Matematica </option>
                <option value="Santo Domingo">Informatica</option>
                <option value="Santo Domingo">Quimica</option>
            </select>
            </div>


        <div class="col-md-2"><br>
            <select class="form-control" name="meal_preference" id="meal_preference"    >
                <option value="Asiganatura">Tipo de Asignatura</option>
                <option value="Asiganatura">Basica</option>
                <option value="Naturales">Tecnica</option>
                <option value="Naturales">Extraricular</option>
                <option value="Naturales">Metodologica</option>
                <option value="Naturales">Otras</option>
            </select>
            </div>

           
            <div class="col-md-2"><br>
            <select class="form-control" name="meal_preference" id="meal_preference"    >
                <option value="Santo Domingo">Nivel Academico</option>
                <option value="Asiganatura">Educaion Inicial</option>
                <option value="Naturales">Educacion Basica</option>
                <option value="Naturales">Educacion Media</option>
                <option value="Naturales">Educacion Tecnico</option>
            </select>
            </div>

            <div class="col-md-2"><br>
            <select class="form-control" name="meal_preference" id="meal_preference"    >
                <option value="Santo Domingo">Tanda</option>
                <option value="Santo Domingo">Matutuina</option>
                <option value="Santo Domingo">Vespertina</option>
           </select>
            </div>

            <div class="col-md-2"><br>
            <select class="form-control" name="meal_preference" id="meal_preference"    >
                <option value="Santo Domingo">Curso</option>
                <option value="Santo Domingo">1ro </option>
                <option value="Santo Domingo">2do </option>
                <option value="Santo Domingo">3ro </option>
            </select>
            </div>

            <div class="col-md-2"><br>
                <button class="btn btn-success">Buscar</button>
            </div>


<!-- Este es el listado de la tabla de docentes -->

<div id="form-estudiantes" style="background-color: white; margin-top:20px; width:90%; padding:20px;">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre de Docente</th>
      <th scope="col">Curso encargado</th>
      <th scope="col">Tanda</th>
      <th scope="col">Estado</th>
      <th scope="col">Accion</th>
    </tr>
  </thead>
  <tbody>
  <?php while($docentes=$docentes_db->fetch_assoc()) {?>
    <tr>
      <td scope="row"> <?php echo $docentes["nombre"]; ?></td>
      <td>4to C</td>
      <td> <?php echo $docentes["tanda"]; ?></td>
      <td> <?php echo $docentes["estado"]; ?></td>
      <td>
        <a href="editar_docentes.php?id=<?php echo $docentes["id_docente"]; ?>" class="btn btn-warning">Editar</a> 
        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $docentes["id_docente"]; ?>">Eliminar</a></td>
    </tr> 

<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $docentes["id_docente"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar docente</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Seguro que desea eliminar este docente?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="../../scripts/rrhh/eliminar_docente.php?id=<?php echo $docentes["id_docente"]; ?>" class="btn btn-danger">Eliminar</a>
      </div>
    </div>
  </div>
</div>
    <?php
  }
    ?>
  </tbody>
</table>    
<a href="agregar_docente.php" class="btn btn-secondary">Nuevo docente</a>
</div>
