<?php 
include("../menu_lateral.php"); 
?>
<<<<<<< HEAD
<div id="form-estudiantes" style="background-color: white; margin-top:50px; width:70%; padding:20px; margin-left:300px;">
=======
<div id="form-estudiantes" style="background-color: white; margin-top:10px; width:83%; padding:20px; margin-left:300px;">
>>>>>>> d09da6933f487597d64b93e3c7c05e86af2811e4
    <div>
    <form action="" method="post">
      <h3> Datos del Aula </h3> 
        <div class="row">

        <div class="col-md-3"><br>
            <label for="">Selecciona el Curso</label>
            <select class="form-control" name="meal_preference" id="meal_preference"    >
                <option value="Santo Domingo">1ro Bachiller</option>
                <option value="Santo Domingo">2do Bachiller</option>
                <option value="Santo Domingo">3ro Bachiller</option>
            </select>
            </div>

            <div class="col-md-3"><br>
            <label for="">Selecciona la Seccion</label>
            <select class="form-control" name="meal_preference" id="meal_preference"    >
                <option value="Santo Domingo">A</option>
                <option value="Santo Domingo">B</option>
                <option value="Santo Domingo">C</option>
            </select>
            </div>

            <div class="col-md-3"><br>
            <label for="">Selecciona el Docente Encargado</label>
            <select class="form-control" name="meal_preference" id="meal_preference"    >
                <option value="Santo Domingo">Josias Matos</option>
                <option value="Santo Domingo">Wilfre Valdez</option>
                <option value="Santo Domingo">Anthony R</option>
                <option value="Santo Domingo">Fredy P</option>
            </select>
            </div>

            <div class="col-md-3"><br>
            <label for="">Selecciona el Rango de Edad</label>
            <select class="form-control" name="meal_preference" id="meal_preference"    >
                <option value="Santo Domingo">8 años - 13 años </option>
                <option value="Santo Domingo">14 años - 16 años</option>
                <option value="Santo Domingo">16 años - 18 años</option>
                <option value="Santo Domingo">18 años - 20 años</option>
            </select>
            </div> 

  <div id="form-estudiantes" style="background-color: white; margin-top:px; width:100%; padding:20px; margin-left:%;">   
  <h3> Asignar Estudiantes </h3>        
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Edad</th>
      <th scope="col">Curso Anterior</th>
      <th scope="col">Accion</th>
    </tr>
  </thead>
  <tbody>
  
    <tr>
      <td scope="row">Wilfred</td>
      <td>Mateo</td>
      <td>12</td>
      <td>8vo</td>
      <td><a href="detalles_estudiante.php"><button class="btn btn-primary">Añadir</button></a></td>
    </tr> 
  
    
    <tr>
      <td scope="row">Joisas</td>
      <td>Mariano</td>
      <td>13</td>
      <td>8vo</td>
      <td><a href="detalles_estudiante.php"><button class="btn btn-primary">Añadir</button></a></td>

    </tr>
    <tr>
      <td scope="row">Fredy</td>
      <td >Cornelio</td>
      <td>12</td>
      <td>8vo</td>
      <td><a href="detalles_estudiante.php"><button class="btn btn-primary">Añadir</button></a></td>
    </tr>
  </tbody>
</table>
</div>                        
            <div class="col-md-12">
                <button class="btn btn-success">Guardar</button>
            </div>
        </form>
        </div>
    </div>
</div>