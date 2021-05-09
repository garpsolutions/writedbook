<?php 
include("../menu_lateral.php"); 
?>
<div id="form-estudiantes" style="background-color: white; margin-top:50px; width:60%; padding:20px; margin-left:300px;">
    <div>
    <form action="" method="post">
      <h3> Datos del Curso </h3> 
        <div class="row">

        <div class="col-md-6"><br>
                <input class="form-control" type="text" placeholder="Nombre de Curso" name="" id="" require>
            </div>

            <div class="col-md-6"><br>
            <select class="form-control" name="meal_preference" id="meal_preference"    >
                <option value="Santo Domingo">Modalidad</option>
                <option value="Santo Domingo">Tecnica</option>
                <option value="Santo Domingo">Normal</option>
            </select>
            </div>

            <div class="col-md-6"><br>
            <select class="form-control" name="meal_preference" id="meal_preference"    >
                <option value="Santo Domingo">Tanda</option>
                <option value="Santo Domingo">Matutina</option>
                <option value="Santo Domingo">Vespertina</option>
                <option value="Santo Domingo">Tanda Completa</option>
            </select>
            </div>

            <div class="col-md-6"><br>
                <input class="form-control" type="text" placeholder="" name="" id="" require>
            </div>
            <div class="col-md-6"><br>
                <input class="form-control" type="text" placeholder="Apellido de Estudiante" name="" id="" require>
            </div>
            <div class="col-md-6"><br>
                <input class="form-control" type="text" placeholder="Correo del Estudiante" name="" id="" require>
            </div>
            
           
            
            <div class="col-md-12"><br>
                <button class="btn btn-success">Guardar</button>
            </div>
        </form>
        </div>
    </div>
</div>