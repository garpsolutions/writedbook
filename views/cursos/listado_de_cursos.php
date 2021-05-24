<?php 
include("../menu_lateral.php");
?>

<!-- Este es el Filtro de la tabla de Cursos -->
<div id="form-estudiantes" style="background-color: white; margin-top:30px; width:83%; padding:20px; margin-left:300px;">
    <div>
    <form action="" method="post">
      <h3> Listado de Cursos</h3> 
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

<div id="form-estudiantes" style="background-color: white; margin-top:50px; width:90%; padding:20px; margin-left:%;">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre de Docente</th>
      <th scope="col">Nombre de la Materia</th>
      <th scope="col">Tipo de Materia</th>
      <th scope="col">Nivel Academico</th>
      <th scope="col">Tanda</th>
    </tr>
  </thead>
  <tbody>
  
    <tr>
      <td scope="row">Freddy Pereyra</td>
      <td>Programacion</td>
      <td>Tecnica</td>
      <td>Tecnico</td>
      <td>Vespertina</td>
    </tr> 
  
    
    <tr>
      <td scope="row">Neitan Garcia</td>
      <td>Educacion Fisica</td>
      <td>Estraricular</td>
      <td>Educacion Media</td>
      <td>Matutina</td>

    </tr>
    <tr>
      <td scope="row">Jorge Madrugador</td>
      <td>Biologia</td>
      <td>Basica</td>
      <td>All</td>
      <td>Matutina</td>
    </tr>
  </tbody>
</table>
</div>