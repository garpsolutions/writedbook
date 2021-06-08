<?php 
include("../menu_lateral.php"); 
?>
<div id="form-estudiantes" style="background-color: white; margin-top:30px; width:80%; padding:20px; margin-left:300px;">
    <div>
    <form action="" method="post">
      <h3>Datos de la Asiganatura</h3> 
        <div class="row">

           
        <div class="col-md-3"><br>
            <label for="">Nivel Academico:</label>
            <select class="form-control" name="meal_preference" id="meal_preference"    >
                <option value="Santo Domingo">Basica</option>
                <option value="Santo Domingo">Media</option>
                <option value="Santo Domingo">Tecnica</option>

            </select>
        </div>


        <div class="col-md-3"><br>
            <label for="">Curso:</label>
            <select class="form-control" name="meal_preference" id="meal_preference"    >
                <option value="Santo Domingo">1ro Bachiller</option>
                <option value="Santo Domingo">3ro de Electronica</option>
                <option value="Santo Domingo">6to de Basica</option>

            </select>
        </div>

        <div class="col-md-3"><br>
            <label for="">Asigantura:</label>
            <select class="form-control" name="meal_preference" id="meal_preference"    >
                <option value="Santo Domingo">Ciencias Sociales</option>
                <option value="Santo Domingo">Matematicas</option>
                <option value="Santo Domingo">Biologia</option>

            </select>
        </div>


        <div class="col-md-3"><br>
            <label for="">Docente</label>
            <select class="form-control" name="meal_preference" id="meal_preference"    >
                <option value="Santo Domingo">Wilfred</option>
                <option value="Santo Domingo">Anthony</option>
                <option value="Santo Domingo">Josias</option>

            </select>  <br> <br>
        </div> 
        
        
              
   <!-- creacion de la unidades -->

        <h3>Creacion de las Unidades</h3> 

        <div class="col-md-8"><br>
            <label for="">Nombre de la Unidad</label>
                <input class="form-control" type="text" placeholder="Carrera: Educacion, Sistemas, Mercadeo" name="" id="" require>
            </div>

        <div class="col-md-6"><br>
            <label for="">Fecha Inicial</label>
                <input class="form-control" type="Date" placeholder="000-000-0000" name="fecha_nacimiento" id="" require>
            </div>

            <div class="col-md-6"><br>
            <label for="">Fecha Final</label>
                <input class="form-control" type="Date" placeholder="000-000-0000" name="fecha_nacimiento" id="" require>
            </div>

               
           
            <div class="col-md-12"><br>
                <a  style="float: right;"
                class="btn btn-success" id="siguiente1">Añadir</a>
            </div>

            <!-- Esta es la Lista de las unidades creadas -->
<div id="form-estudiantes" style="background-color: white; margin-top:20px; width:90%; padding:20px; margin-left:%;">
<table class="table">
  <thead>
    <tr>
    
      <th scope="col">Nombre</th>
      <th scope="col">Fecha</th>
      <th scope="col">Accion</th>
     
   
    </tr>
  </thead>
  <tbody>
  
    <tr>
      
      <td>Conceptos Fundamentales. Conjuntos Numéricos. Campo Real</td>
      <td>02/05/2021</td>
      <td> <button class="btn btn-secondary">Editar</button> <button class="btn btn-success">Planificar</button> </td>
    
    </tr> 
  
    
    <tr>
      
    <td>Método de Evaluación de Límites. Indeterminaciones</td>
      <td>04/05/21</td>
      <td> <button class="btn btn-secondary">Editar</button> <button class="btn btn-success">Planificar</button> </td>
    

    </tr>
    <tr>
      
    <td>Propiedades fundamentales del límite de una función</td>
      <td>7/05/2021</td>
      <td> <button class="btn btn-secondary">Editar</button> <button class="btn btn-success">Planificar</button> </td>

    </tr>

    </tbody>
</table>
           
          
        </form>
        </div>
    </div>
</div>
        </form>
        </div>
    </div>
</div>