<?php 
include("../menu_lateral.php"); 
?>
<div id="form-estudiantes" style="background-color: white; margin-top:50px; width:60%; padding:20px; margin-left:300px;">
    <div>
    <form action="" method="post">
      <h3> Creacion de Asignatura </h3> 
        <div class="row">



        <div class="col-md-6"><br>
        <label for=""> Codigo de la Materia</label>
                <input class="form-control" type="text" placeholder="ejemplo Mat01." name="" id="" require>
        </div>

        <div class="col-md-6"><br>
        <label for=""> Nombre de la Materia</label>
                <input class="form-control" type="text" placeholder="Sociales, Matematicas..." name="" id="" require>
        </div>

        <div class="col-md-6"><br>
        <label for=""> Seleccione el Tipo de Asignatura</label>
            <select class="form-control" name="meal_preference" id="meal_preference"    >
                <option value="Asiganatura">Basica</option>
                <option value="Naturales">Tecnica</option>
                <option value="Naturales">Extraricular</option>
                <option value="Naturales">Metodologica</option>
                <option value="Naturales">Otras</option>
            </select>
            </div>

         
            
        <div class="col-md-6"><br>
        <label for="">
                    Seleccione Nivel Educativo</label>
            <select class="form-control" name="meal_preference" id="meal_preference"    >
                <option value="Asiganatura">Educaion Inicial</option>
                <option value="Naturales">Educacion Basica</option>
                <option value="Naturales">Educacion Media</option>
                <option value="Naturales">Educacion Tecnico</option>
              
            </select>
            </div>

           <div class="col-md-12"><br>
                <button class="btn btn-success">Guardar</button>
            </div>
        
        </form>
        </div>
    </div>
</div>