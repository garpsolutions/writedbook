
<div id="form-estudiantes" style="background-color: white; margin-top:50px; width:60%; padding:20px; margin-left:24%;">
    <div>
      <h5> Datos de tutores </h5> 
        <div class="row">
            <div class="col-md-12"><br>
                <input class="form-control campo" type="text" value="<?php echo $estudiante['nombre_padre']?>" name="nombre_padre" placeholder="Nombre del padre">
            </div>
            <div class="col-md-12"><br>
                <input class="form-control campo" type="Text" value="<?php echo $estudiante['nombre_madre']?>" placeholder="Nombre de la madre" name="nombre_madre">
            </div>
            <div class="col-md-6"><br>
                <label for="">Teléfono de la madre</label>
                <input class="form-control campo" type="Text" value="<?php echo $estudiante['telefono_madre']?>" placeholder="000-000-000" name="telefono_madre">
            </div>
            <div class="col-md-6"><br>
                <label for="">Teléfono de la padre</label>
                <input class="form-control campo" type="text" value="<?php echo $estudiante['telefono_padre']?>" placeholder="000-000-0000" name="telefono_padre">
            </div>
            <div class="col-md-6"><br>
                <label for=""><label for="">Celular de la padre</label></label>
                <input class="form-control campo" type="text" value="<?php echo $estudiante['celular_padre']?>" placeholder="000-000-0000" name="celular_padre">
            </div>
            <div class="col-md-6"><br>
              <label for="">Celular de la madre</label>
                <input class="form-control campo" type="Text" value="<?php echo $estudiante['celular_madre']?>" placeholder="000-000-0000" name="celular_madre">
            </div>

            <div  class="col-md-12"><br>
                <textarea class="form-control campo"  placeholder="Dirección" name="direccion" id="" cols="30" rows="4"><?php echo $estudiante['direccion_madre']?></textarea>
            </div>
            <div class="col-md-6"><br>
                <a   class="btn btn-danger " id="anterior1">Anterior</a>
                <a href="detalles_estudiante.php?id=<?php echo $estudiante['id_estudiante']?>" class="btn btn-secondary " id="">Cancelar</a>
                <a class="btn btn-warning editar" id="">Editar</a>
            </div>
            <div class="col-md-6"><br>
                <a  style="float: right;"
                class="btn btn-primary " id="siguiente2">Siguiente</a>
            </div>
        </div>
    </div>
</div>