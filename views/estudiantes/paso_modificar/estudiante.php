

<div id="form-estudiantes" style="background-color: white; margin-top:50px; width:60%; padding:20px; margin-left:24%;">
    <div>
      <h5> Datos del estudiante </h5> 
        <div class="row">
            <input value="<?php echo $estudiante['id_estudiante']?>" name="id" type="hidden">
            <div class="col-md-16"><br>
                <input class="form-control campo" value="<?php echo $estudiante['nombre']?>" type="text" name="nombre_estudiante" placeholder="Nombre del estudiante">
            </div>
            <div class="col-md-6"><br>
                <input class="form-control campo" value="<?php echo $estudiante['apellido_paterno']?>" type="Text" placeholder="Apellido paterno" name="apellido_paterno">
            </div>
            <div class="col-md-6"><br>
                <input class="form-control campo" value="<?php echo $estudiante['apellido_materno']?>" type="Text" placeholder="Apellido materno" name="apellido_materno" >
            </div>
            <div class="col-md-6"><br>
                <input class="form-control campo"value="<?php echo $estudiante['colegio_anterior']?>" type="text" placeholder="Colegio anterior" name="colegio_anterior">
            </div>
            <div class="col-md-6"><br>
                <input class="form-control campo" type="text" placeholder="Curso anterior" name="curso_anterior">
            </div>
            <div class="col-md-6"><br>
                <label for="">
                    Seleccione una provincia</label>
            <select class="form-control campo" name="provincia" id="meal_preference">
                <option value="<?php echo $estudiante['apellido_paterno']?>"><?php echo $estudiante['provincia']?></option>
                <option value="Santo Domingo">Provincias</option>
                <option value="Santo Domingo">Santo Domingo</option>
                <option value="Distrito Nacional">Distrito Nacional</option>
                <option value="Santiago">Santiago</option>
                <option value="San Cristóbal">San Cristóbal</option>
                <option value="La Vega">La Vega</option>
                <option value="Puerto Plata">Puerto Plata</option>
                <option value="San Pedro de Macorís">San Pedro de Macorís</option>
                <option value="Duarte">Duarte</option>
                <option value="La Altagracia">La Altagracia</option>
                <option value="La Romana">La Romana</option>
                <option value="San Juan">San Juan</option>
                <option value="Espaillat">Espaillat</option>
                <option value="Azua">Azua</option>
                <option value="Barahona">Barahona</option>
                <option value="Monte Plata">Monte Plata</option>
                <option value="Peravia">Peravia</option>
                <option value="Monseñor Nouel">Monseñor Nouel</option>
                <option value="Valverde">Valverde</option>
                <option value="Sánchez Ramírez">Sánchez Ramírez</option>
                <option value="María Trinidad Sánchez">María Trinidad Sánchez</option>
                <option value="Montecristi">Montecristi</option>
                <option value="Samaná">Samaná</option>
                <option value="Bahoruco">Bahoruco</option>
                <option value="Hermanas Mirabal">Hermanas Mirabal</option>
                <option value="El Seibo">El Seibo</option>
                <option value="Hato Mayor">Hato Mayor</option>
                <option value="Dajabón">Dajabón</option>
                <option value="Elías Piña">Elías Piña</option>
                <option value="San José de Ocoa">San José de Ocoa</option>
                <option value="Santiago Rodríguez">Santiago Rodríguez</option>
                <option value="Independencia">Independencia</option>
                <option value="Pedernales">Pedernales</option>
            </select>
            
            </div>
            <div class="col-md-6"><br>
            <label for="">Fecha de Nacimiento</label>
                <input class="form-control campo" value="<?php echo $estudiante['fecha_nacimiento']?>" type="Date"  name="fecha_nacimiento" id="" require>
            </div>
            <div class="col-md-12"><br>
            <label for="">Motivo de salida</label>
            <textarea class="form-control campo" placeholder="Razón de salida de la institución anterior" name="razon" id="" cols="10" rows="4"><?php echo $estudiante['motivo_cambio_colegio']?></textarea>
            </div>
            <div class="col-md-6"><br>
                <a href="detalles_estudiante.php?id=<?php echo $estudiante['id_estudiante']?>" class="btn btn-secondary" id="">Cancelar</a>
                <a class="btn btn-warning  editar" id="">Editar</a>
            </div>
            <div class="col-md-6"><br>
                <a  style="float: right;"
                class="btn btn-primary " id="siguiente1">Siguiente</a>
            </div>
        </div>
    </div>
</div>

            
