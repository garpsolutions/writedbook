<div id="form-estudiantes" style="background-color: white; margin-top:50px; width:60%; padding:20px; margin-left:300px;">
    <h5> Datos del empleado</h5> 
    <div>      
        <div class="row">
            <div class="col-md-12"><br>
                <label for="">Persona a contactar en caso de emergencia</label>
            </div>
            <div class="col-md-12"><br>
                <input class="form-control" type="text" value="<?php echo $empleado["nombre_contacto"] ?>" placeholder="Nombre" name="emergencia" disabled required>
            </div>
            <div class="col-md-6"><br>
                <input class="form-control" type="text" value="<?php echo $empleado["parentesco_contacto"] ?>" placeholder="parentesco" name="parentesco" disabled required>
            </div>
            <div class="col-md-6"><br>
                <input class="form-control" type="text" value="<?php echo $empleado["telefono_contacto"] ?>" placeholder="000-000-0000" name="tel_emergencia" disabled required>
            </div>
            <div class="col-md-6" ><br>
                <a class="btn btn-danger" id="anterior1">Anterior</a>
                <a href="detalles_empleados.php?id=<?php echo $id ?>" class="btn btn-secondary">Cancelar</a>
                <a class="btn btn-warning" id="editar">Editar</a>
            </div>
            <div class="col-md-6" ><br>
                <button class="btn btn-success" style="float:right">Guardar</button>
            </div>
        </div>
    </div>
</div>