
<div id="form-estudiantes" style="background-color: white; margin-top:50px; width:60%; padding:20px; margin-left:24%;">
    <div>
      <h5>Familiar cercano al padre</h5> 
        <div class="row">
            <div class="col-md-16"><br>
                <input class="form-control campo" type="text" value="<?php echo $estudiante['cercano_padre']?>" name="familiar_padre" placeholder="Nombre de un familiar cercano al padre" id="" require>
            </div>
            <div class="col-md-6"><br>
                <input class="form-control campo" type="text" value="<?php echo $estudiante['parentesco_cercano_madre']?>" placeholder="Parentesco" name="parentesco_padre" id="" require>
            </div>
            <div class="col-md-6"><br>
                <input class="form-control campo" type="Text" value="<?php echo $estudiante['direccion_cercano_madre']?>" placeholder="Dirección" name="direccion_padre" id="" require>
            </div>
            <div class="col-md-6"><br>
            <label for="">Teléfono</label>
                <input class="form-control campo" type="Text" value="<?php echo $estudiante['telefono_cercano_madre']?>" placeholder="000-000-0000" name="familiar_telefono_padre" id="" require>
            </div>
            <div class="col-md-6"><br>
            <label for="">Celular</label>
                <input class="form-control campo" type="text" value="<?php echo $estudiante['celular_cercano_madre']?>" placeholder="000-000-0000" name="familiar_celular_padre" id="" require>
            </div>
            <div class="col-md-6"><br>
                <a   class="btn btn-danger " id="anterior3">Anterior</a>
                <a href="detalles_estudiante.php?id=<?php echo $estudiante['id_estudiante']?>" class="btn btn-secondary " id="">Cancelar</a>
                <a class="btn btn-warning  editar" id="">Editar</a>

            </div>
            <div class="col-md-6"><br>
                <a  style="float: right;"
                class="btn btn-primary " id="siguiente4">Siguiente</a>
            </div>
        </div>
    </div>
</div>