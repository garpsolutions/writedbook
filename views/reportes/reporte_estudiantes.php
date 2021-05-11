<?php 
include("../menu_lateral.php");
?>
<div id="form-estudiantes" style="background-color: white; margin-top:50px; width:60%; padding:20px; margin-left:24%;">
 <h3>Reporte estudiantes</h3>
<form action="" method="post">
<div class="row">
    <div class="col-md-2" >
        <select class="form-control" name="" id="">
            <option value="">Curso</option>
            <option value="">1ro A</option>
            <option value="">1ro B</option>
            <option value="">2do A</option>
            <option value="">2do B</option>
            <option value="">3ro A</option>
        </select>
    </div>
    <div class="col-md-2">
    <select class="form-control" name="" id="">
            <option value="">Grado</option>
            <option value="">1ro</option>
            <option value="">1ro</option>
            <option value="">2do</option>
            <option value="">2do</option>
            <option value="">3ro</option>
    </select>
    </div>
    <div class="col-md-2">
         <select class="form-control" name="" id="">
            <option value="">Estado</option>
            <option value="">Activo</option>
            <option value="">Inactivo</option>
            <option value="">Egresado</option>
    </select>
    </div>
    <div class="col-md-3">
            <input class="form-control" type="text" name="curso" placeholder="indice minimo"id="">
    </div>
    <div class="col-md-2">
        <button class="btn btn-danger">Filtrar</button>
    </div>
</div>
</form>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Indice</th>
      <th scope="col">Curso</th>
      <th scope="col">Estado</th>
    </tr>
  </thead>
  <tbody>
  
    <tr>
      <td scope="row">Mark</td>
      <td>Otto</td>
      <td>5</td>
      <td>3ro C</td>
      <td>Activo</td>
    </tr> 
  
    
    <tr>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>2</td>
      <td>4to A</td>
      <td>Egresado</td>
    </tr>
    <tr>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>2</td>
      <td>4to A</td>
      <td>Egresado</td>
    </tr>
  </tbody>
</table>
<button class="btn btn-secondary">Descargar</button>
</div>