<?php 
include("../menu_lateral.php"); 
$asignaturas_db= $conexion->query("SELECT * FROM $institucion.asignaturas ");
?>

<!-- Este es el Filtro de la tabla de asiganaturas -->
<div id="form-estudiantes" style="background-color: white; margin-top:30px; width:75%; padding:20px; margin-left:300px;">
    <div>
      <h3> Listado de Asignatura </h3> 
        <div class="row">
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
                <option value="Santo Domingo">Docente</option>
                <option value="Santo Domingo">Wilfred</option>
                <option value="Santo Domingo">El RRR</option>
                <option value="Santo Domingo">Akagami</option>
            </select>
            </div>

            <div class="col-md-2"><br>
            <select class="form-control" name="meal_preference" id="meal_preference">
                <option value="Santo Domingo">Curso</option>
                <option value="Santo Domingo">1ro </option>
                <option value="Santo Domingo">2do </option>
                <option value="Santo Domingo">3ro </option>
            </select>
            </div>

            <div class="col-md-2"><br>
                <button class="btn btn-success">Buscar</button>
            </div>
            </form>
  <!-- Esta es la Lista de las Asignaturas -->

<<<<<<< HEAD
<div id="form-estudiantes" style="background-color:white; margin-top:20px; padding:20px;">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Codigo</th>
        <th scope="col">Nombre</th>
        <th scope="col">Tipo</th>
        <th scope="col">Nivel</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
    <?php
      while($asignaturas = $asignaturas_db->fetch_assoc()){
    ?>
      <tr>
        <td scope="row"> <?php echo $asignaturas["codigo"] ?></td>
        <td><?php echo $asignaturas["asignatura"] ?></td>
        <td><?php echo $asignaturas["tipo"] ?></td>
        <td><?php echo $asignaturas["nivel_academico"] ?></td>
        <td>  
          <a href="editar_asignaturas.php?id=<?php echo $asignaturas["id_asignatura"] ?>" class="btn btn-warning" >Editar</a> 
          <a data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $asignaturas['id_asignatura'] ?>" class="btn btn-danger">Eliminar</a>
        </td>
      </tr> 
<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $asignaturas["id_asignatura"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar asignatura</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Esta seguro que desea eliminar esta asignatura?
        <?php echo $asignaturas["id_asignatura"] ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="../../scripts/asignaturas/eliminar_asignatura.php?id=<?php echo $asignaturas['id_asignatura'] ?>" type="button" class="btn btn-danger">Eliminar</a>
      </div>
    </div>
  </div>
</div>
      <?php
      }
    ?>
    </tbody>
  </table>
        
        </div>
    </div>
</div>
<?php 
  if(isset($_GET["back"])){
    ?>
    <script>
       $(document).ready(function(){
            Swal.fire({
            title: 'Asignatura eliminada',
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