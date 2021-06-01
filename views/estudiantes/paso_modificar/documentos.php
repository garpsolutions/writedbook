
<div id="form-estudiantes" style="background-color: white; margin-top:50px; width:60%; padding:20px; margin-left:24%;">
    <div>
      <h5> Documentos</h5> 
        <div class="row">
            <div class="col-md-6"><br>
                <label for="">Fotografia</label>
                <input class="form-control campo" type="file" name="" placeholder="Nombre de un familiar cercano al padre" id="" require>
            </div>
            <div class="col-md-6"><br>
                <label for="">Acta de nacimiento</label>
                <input class="form-control campo" type="file" placeholder="Parentesco" name="" id="" require>
            </div>
            <div class="col-md-6"><br>
                <label for="">Copia cedula de la madre</label>
                <input class="form-control campo" type="file" placeholder="Direccion" name="" id="" require>
            </div>
            <div class="col-md-6"><br>
            <label for="">Copia de cedula padre</label>
                <input class="form-control campo" type="file" placeholder="000-000-0000" name="" id="" require>
            </div>
            <div class="col-md-6"><br>
                <a   class="btn btn-danger " id="anterior4">Anterior</a>
                <a href="detalles_estudiante.php?id=<?php echo $estudiante['id_estudiante']?>" class="btn btn-secondary " id="">Cancelar</a>
                <a class="btn btn-warning  editar" id="">Editar</a>

            </div>
            <div class="col-md-6"><br>
                <button  style="float: right;"class="btn btn-success">Guardar</button>
            </div>
        </div>
    </div>
</div>