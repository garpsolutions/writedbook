<?php 
include("../menu_lateral.php"); 
?>
<div id="form-estudiantes" style="background-color: white; margin-top:50px; width:60%; padding:20px; margin-left:300px;">
    <div>
    <form action="" method="post">
      <h3> Datos del Estudiante </h3> 
        <div class="row">

        <div class="col-md-6"><br>
            <select class="form-control" name="meal_preference" id="meal_preference"    >
                <option value="Asiganatura">Asignaturas</option>
                <option value="Naturales">Naturales</option>
                <option value="Naturales">Sociales</option>
                <option value="Naturales">Lengua Española</option>
                <option value="Naturales">Matematicas</option>
            </select>
            </div>

            <div class="col-md-6"><br>
            <select class="form-control" name="meal_preference" id="meal_preference"    >
                <option value="Santo Domingo">Cursos</option>
                <option value="Santo Domingo">Priimero A</option>
                <option value="Santo Domingo">Priimero B</option>
                <option value="Santo Domingo">Priimero C</option>
            </select>
            </div>

            <div class="col-md-6"><br>
            <select class="form-control" name="meal_preference" id="meal_preference"    >
                <option value="Santo Domingo">ID del Estudiante</option>
                <option value="Santo Domingo"># 01</option>
                <option value="Santo Domingo"># 02</option>
                <option value="Santo Domingo"># 03</option>
                <option value="Santo Domingo"># 04</option>
            </select>
            </div>

            <div class="col-md-6"><br>
                <input class="form-control" type="text" placeholder="Encargado del Curso" name="" id="" require>
            </div>
            <div class="col-md-6"><br>
                <input class="form-control" type="text" placeholder="Nombre del Estudiante" name="" id="" require>
            </div>
            <div class="col-md-6"><br>
                <input class="form-control" type="text" placeholder="Apellido de Estudiante" name="" id="" require>
            </div>
            <div class="col-md-6"><br>
                <input class="form-control" type="text" placeholder="Correo del Estudiante" name="" id="" require>
            </div>
           
            
        </form>
        </div>
    </div>
</div>

<div id="form-estudiantes" style="background-color: white; margin-top:50px; width:60%; padding:20px; margin-left:300px;">
    <div>
    <form action="" method="post">
      <h3> Registro de Calificaciones </h3> 
        <div class="row">

        <div class="col-md-6"><br>
            <select class="form-control" name="meal_preference" id="meal_preference"    >
                <option value="Santo Domingo">Primer Periodo</option>
                <option value="Santo Domingo">Segundo Periodo</option>
            </select>
            </div>

            <div class="col-md-6"><br>
            <select class="form-control" name="meal_preference" id="meal_preference"    >
                <option value="Santo Domingo">Agosto</option>
                <option value="Santo Domingo">Septiembre</option>
                <option value="Santo Domingo">Octubre</option>
                <option value="Santo Domingo">Noviembre</option>
                <option value="Santo Domingo">Diciembre</option>
            </select>
            </div>

       <div class="col-md-6"><br>
                <input class="form-control" type="text" placeholder="Examen" name="" id="" require>
            </div>
            <div class="col-md-6"><br>
                <input class="form-control" type="text" placeholder="Participacion" name="" id="" require>
            </div>
            <div class="col-md-6"><br>
                <input class="form-control" type="text" placeholder="Practicas" name="" id="" require>
            </div>
            <div class="col-md-6"><br>
                <input class="form-control" type="text" placeholder="Asistencias" name="" id="" require>
            </div>
            <div class="col-md-6"><br>
                <input class="form-control" type="text" placeholder="Practica o Trabajo Final" name="" id="" require>
            </div>
            <div class="col-md-6"><br>
                <input class="form-control" type="text" placeholder="Cuaderno o Cuadernilos" name="" id="" require>
            </div>
            <div class="col-md-6"><br>
            </div>
            <div class="col-md-12"><br>
                <button class="btn btn-success">Guardar</button> <button class="btn btn-danger"> Publicar</button>
            </div>

        </form>
        </div>
    </div>
</div>