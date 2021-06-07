
<div id="form-estudiantes" style="background-color: white; margin-top:50px; width:60%; padding:20px; margin-left:24%;">
    <div>
      <h5> Familiar cercano a la madre </h5> 
        <div class="row">
            <div class="col-md-16"><br>
                <input class="form-control" type="text" value="<?php echo $estudiante['cercano_madre']?>" name="familiar_madre" placeholder="Nombre de un familiar cercano al padre" disabled>
            </div>
            <div class="col-md-6"><br>
                <input class="form-control" type="text" value="<?php echo $estudiante['parentesco_cercano_madre']?>" placeholder="Parentesco" name="parentesco_madre" disabled>
            </div>
            <div class="col-md-6"><br>
                <input class="form-control" type="Text" value="<?php echo $estudiante['direccion_cercano_madre']?>" placeholder="Dirección" name="direccion_madre" disabled>
            </div>
            <div class="col-md-6"><br>
            <label for="">Teléfono</label>
                <input class="form-control" type="Text" value="<?php echo $estudiante['telefono_cercano_madre']?>" placeholder="000-000-0000" name="familiar_telefono_madre" disabled>
            </div>
            <div class="col-md-6"><br>
            <label for="">Celular</label>
                <input class="form-control" type="text" value="<?php echo $estudiante['celular_cercano_madre']?>" placeholder="000-000-0000" name="familiar_celular_madre" disabled>
            </div>
            <div class="col-md-6"><br>
                <a   class="btn btn-danger " id="anterior2">Anterior</a>
                <a href="detalles_estudiante.php?id=<?php echo $estudiante['id_estudiante']?>" class="btn btn-secondary" id="">Cancelar</a>
            </div>
            <div class="col-md-6"><br>
                <a  style="float: right;"
                class="btn btn-primary " id="siguiente3">Siguiente</a>
            </div>
        </div>
    </div>
</div>