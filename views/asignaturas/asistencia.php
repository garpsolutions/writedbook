<?php 
include("../menu_lateral.php"); 
?>
<div id="form-estudiantes" style="background-color: white; margin-top:50px; width:60%; padding:20px; margin-left:300px;">
    <div>
    <form action="" method="post">
      <h3> Registro de Asistencia </h3> 
        <div class="row">

        <div class="col-md-3"><br>
            <select class="form-control" name="meal_preference" id="meal_preference"    >
                <option value="Asiganatura">Asignaturas</option>
                <option value="Naturales">Naturales</option>
                <option value="Naturales">Sociales</option>
                <option value="Naturales">Lengua Española</option>
                <option value="Naturales">Matematicas</option>
            </select>
            </div>

           
            <div class="col-md-3"><br>
            <select class="form-control" name="meal_preference" id="meal_preference"    >
                <option value="Santo Domingo">Cursos</option>
                <option value="Santo Domingo">1ro de Bachiller</option>
                <option value="Santo Domingo">2do de Bachiller</option>
                <option value="Santo Domingo">3ro de Bachiller</option>
            </select>
            </div>

            <div class="col-md-2"><br>
            <select class="form-control" name="meal_preference" id="meal_preference"    >
                <option value="Santo Domingo">Aulas</option>
                <option value="Santo Domingo">Primero A</option>
                <option value="Santo Domingo">Primero B</option>
                <option value="Santo Domingo">Primero C</option>
            </select>
            </div>

            <div class="col-md-3"><br>
                <input class="form-control" type="text" placeholder="Encargado del Curso" name="" id="" require>
            </div>

<div id="form-estudiantes" style="background-color: white; margin-top:20px; width:90%; padding:20px; margin-left:%;">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Curso</th>
      <th scope="col">Accion</th>
    </tr>
  </thead>
  <tbody>
  
    <tr>
      <td scope="row">1</td>
      <td>Mark</td>
      <td>Otto</td>
      <td><a href="detalles_docentes.php"><button class="btn btn-primary"><i class="fa fa-eye"></i></button></a></td>
    </tr> 
  
    
    <tr>
      <td scope="row">2</td>
      <td>Jacob</td>
      <td>Thornton</td>
      <td><a href="#"><button class="btn btn-primary"><i class="fa fa-eye"></i></button></a></td>

    </tr>
    <tr>
      <td scope="row">3</td>
      <td >Larry the Bird</td>
      <td>@twitter</td>
      <td><a href="#"><button class="btn btn-primary"><i class="fa fa-eye"></i></button></a></td>
    </tr>
  </tbody>
</table>
           
            <div class="col-md-12"><br>
                <button class="btn btn-success">Guardar</button>
            </div>
        </form>
        </div>
    </div>
</div>