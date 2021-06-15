<?php 
include("../menu_lateral.php"); 

$unidades_db=$conexion->query("SELECT * FROM $institucion.unidades WHERE creado_por='$usuario'");
?>
<div id="form-estudiantes" style="background-color: white; margin-top:30px; width:75%; padding:20px; margin-left:300px;">
<h3>Planificaciones</h3>
<!-- Esta es la Lista de las unidades creadas -->
<div id="form-estudiantes" style="background-color: white; margin-top:20px; padding:20px;">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Unidad</th>
      <th scope="col">Asignatura</th>
      <th scope="col">Curso</th>
      <th scope="col">Accion</th>
    </tr>
  </thead>
  <tbody>
    <?php
        while($unidades=$unidades_db->fetch_assoc()){
    ?>
    <tr>
        <td><?php echo $unidades["nombre"] ?></td>
      <td><?php echo $unidades["asignatura"] ?></td>
      <td><?php echo $unidades["curso"] ?></td> 
      <td> <button class="btn btn-warning">Editar</button> <a href="planificar.php?id=<?php echo $unidades["id_unidad"] ?>" class="btn btn-success">Planificar</a> </td>
    </tr> 
  <?php
        }
    ?>

    </tbody>
</table>
           
          
        </form>
        </div>
        <button class="btn btn-secondary">Nueva unidad</button>
    </div>
</div>
        </div>
    </div>
</div>
<?php 
  if(isset($_GET["back"])){
    ?>
    <script>
       $(document).ready(function(){
            Swal.fire({
            title: 'Unidad creada',
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
  if(isset($_GET["mayor"])){
    ?>
    <script>
       $(document).ready(function(){
            Swal.fire({
            title: 'La fecha de inicio no puede ser una fecha despues del cierre',
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