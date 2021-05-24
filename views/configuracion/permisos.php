<?php 
include("../menu_lateral.php"); 
?> 
<div id="form-estudiantes" style="background-color: white; margin-top:50px; width:60%; padding-bottom:50px !important; padding:20px; margin-left:24%;">
    <div>
      <h3>Permisos</h3>
      <form action="" method="post"> 
        <div class="row"><br>
            <div class="row"><br>
                <div class="col-md-6">
                <label for=""> Estudiantes</label>
                    <input type="checkbox" name="estudiantes" id="">
                </div>
                <div class="col-md-6">
                    <label for="">Docentes</label>
                    <input type="checkbox" name="docentes" id="">
                </div>
                <div class="col-md-6">
                    <label for="">Asignaturas</label>
                    <input type="checkbox" name="asignaturas" id="">
                </div>
                <div class="col-md-6">
                    <label for="">Cursos</label>
                    <input type="checkbox" name="cursos" id="">
                </div>
                <div class="col-md-6">
                 <label for="">Recursos Humanos</label>
                    <input type="checkbox" name="hhrr" id="">
                </div>
                <div class="col-md-6">
                 <label for="">Reportes</label>
                    <input type="checkbox" name="reportes" id="">
                </div>
                <div class="col-md-6">
                 <label for="">Contabilidad</label>
                    <input type="checkbox" name="contabilidad" id="">
                </div>
                <div class="col-md-6">
                 <label for="">Configuracion</label>
                    <input type="checkbox" name="configuracion" id="">
                </div>
                <div class="col-md-6"><br>
                <button id="anterior1" class="btn btn-danger">Atras</button>
                    <button class="btn btn-success">Guardar</button>
                </div>
            </div>
        </div>
    </form>
    </div>
</div>