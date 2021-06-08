<?php 
include("../menu_lateral.php"); 
?>

<!-- Este es el Filtro de la tabla de asiganaturas -->
<div id="form-estudiantes" style="background-color: white; margin-top:30px; width:83%; padding:20px; margin-left:300px;">
    <div>
    <form action="" method="post">
      <h3> Listado de Asiganatura </h3> 
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

<div id="form-estudiantes" style="background-color:white; margin-top:20px; width:70%; padding:20px;">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Nombre</th>
      <th scope="col">Tipo</th>
      <th scope="col">Nivel</th>
      <th scope="col">Docentes</th>
    </tr>
  </thead>
  <tbody>
  
    <tr>
      <td scope="row">0001</td>
      <td>Naturales</td>
      <td>Basica</td>
      <td>All</td>
    </tr> 
  
    
    <tr>
      <td scope="row">0002</td>
      <td>Matematica</td>
      <td>Basica</td>
      <td>All</td>
      <td>Wilfred</td>>

    </tr>
    <tr>
      <td scope="row">0021</td>
      <td >Programacion</td>
      <td>Tecnica</td>
      <td>Tecnico Informatica</td>
      <td>Akagami</td>
    </tr>

    </tbody>
</table>
        
        </div>
    </div>
</div>