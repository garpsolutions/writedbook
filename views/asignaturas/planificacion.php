<?php 
include("../menu_lateral.php"); 
?>
<div id="form-estudiantes" style="background-color: white; margin-top:30px; width:75%; padding:20px; margin-left:300px;">
    <div>
    <form action="../../scripts/asignaturas/agregar_unidades.php" method="post">
      <h3>Datos de la Asiganatura</h3> 
        <div class="row">
            <div class="col-md-6"><br>
                <label for="">Curso:</label>
                <select class="form-control" name="curso" id="curso"    >
                    <option value="1ro">1ro Bachiller</option>
                    <option value="3ro">3ro de Electronica</option>
                    <option value="6to">6to de Basica</option>
                </select>
            </div>
            <div class="col-md-6"><br>
              <label for="">Asigantura:</label>
              <select class="form-control" name="asignatura" id="asignatura"    >
                <option value="Santo Domingo">Ciencias Sociales</option>
                <option value="Santo Domingo">Matematicas</option>
                <option value="Santo Domingo">Biologia</option>
              </select><br>
            </div>
            <!-- creacion de la unidades -->
            <h3>Creacion de las Unidades</h3> 
            <div class="col-md-12"><br>
              <input class="form-control" type="text" placeholder="Nombre de la unidad" name="nombre" id="nombre" required>
            </div>
            <div class="col-md-6"><br>
              <label for="">Fecha Inicial</label>
              <input class="form-control" type="Date" placeholder="000-000-0000" name="fecha_inicio" id="fecha_inicio" require>
            </div>
            <div class="col-md-6"><br>
              <label for="">Fecha Final</label>
              <input class="form-control" type="Date" placeholder="000-000-0000" name="fecha_cierre" id="fecha_cierre" require>
            </div>
            <div class="col-md-12"><br>
                <button  style="float: right;"class="btn btn-success" id="siguiente1">Añadir</button>
            </div>
          </div>
        </form>
      </div>
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