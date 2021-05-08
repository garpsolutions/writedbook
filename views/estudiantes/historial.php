<?php 
include("../menu_lateral.php");
?>
<div id="form-estudiantes" style="background-color: white; margin-top:50px; width:70%; padding:20px; margin-left:24%;">
<h5>Historial estudiantil</h5>
<small>Promedio de asistencia: 70% </small><small> Promedio de comportamiento: bueno</small>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Asignatura</th>
      <th scope="col">Asistencia</th>
      <th scope="col">Periodo</th>
      <th scope="col">Curso</th>
      <th scope="col">Calificacion final</th>
      <th scope="col">Comportamiento</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row">Lengua española</td>
      <td>90%</td>
      <td>Primer Periodo</td>
      <td>1ro</td>
      <td>85</td>
      <td><button class="btn btn-success"><small>Buen</small></button> </td>
    </tr> 
    <tr>
      <td scope="row">Ciencias naturales</td>
      <td>80%</td>
      <td>Segundo periodo</td>
      <td>1ro</td>
      <td>65</td>
      <td><button class="btn btn-warning"><small>Intermedio</small></button></td>
    </tr>
    <tr>
      <td scope="row">Matematicas</td>
      <td >95%</td>
      <td>Primero periodo</td>
      <td>2do</td>
      <td>50</td>
      <td><button class="btn btn-danger"><small>Mal</small></button></td>
    </tr>
  </tbody>
</table>
<a href="detalles_estudiante.php"><button class="btn btn-danger">Anterior</button></a>
</div>