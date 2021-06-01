<div id="form-estudiantes" style="background-color: white; margin-top:50px; width:60%; padding:20px; margin-left:300px;">
    <div>
      <h5> Datos del empleado</h5> 
        <div class="row">
            <div class="col-md-12"><br>
                <input class="form-control" type="text"value="<?php echo $empleado["nombre"] ?>" placeholder="Nombre del empleado" name="nombre"disabled required>
            </div>
            <div class="col-md-4"><br>
                <input class="form-control" type="text" value="<?php echo $empleado["cedula"] ?>" placeholder="Cédula de identidad" name="cedula"disabled required>
            </div>

            <div class="col-md-4"><br>
                <input class="form-control" type="text" value="<?php echo $empleado["telefono"] ?>" placeholder="000-000-0000" name="telefono"disabled required>
            </div>
            <div class="col-md-4"><br>
                <input class="form-control" type="text" value="<?php echo $empleado["email"] ?>" placeholder="Email" name="email" disabled required>
            </div> 
            <div class="col-md-4"><br>
                <input class="form-control" type="text" value="<?php echo $empleado["nacionalidad"] ?>" placeholder="Nacionalidad" name="nacionalidad" disabled required>
            </div> 
            <div class="col-md-4"><br>
            <select class="form-control campo" name="estado_civil" id="meal_preference" disabled>
                <option value="<?php echo $empleado["nombre_contacto"] ?>"><?php echo $empleado["estado_civil"] ?></option>
                <option value="casado">Casado/a</option>
                <option value="Soltero">Soltero/a</option>
                <option value="Union libre">Union libre</option>
            </select>
            </div>
            <div class="col-md-4"><br>
                <input class="form-control" type="text" value="<?php echo $empleado["titulo_academico"] ?>" placeholder="Titulo académico" name="titulo" disabled required>
            </div>
            <div class="col-md-4"><br>
                <label for="">
                    Seleccione una provincia</label>
            <select class="form-control campo" name="provincia" id="meal_preference" disabled>
                <option value="<?php echo $empleado["lugar_nacimiento"] ?>"><?php echo $empleado["lugar_nacimiento"] ?></option>
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
            <div class="col-md-4"><br>
                <label for="">
                Tipo de contrato
                </label>
            <select class="form-control campo" name="tipo" id="meal_preference"disabled>
                <option value="<?php echo $empleado["nombre_contacto"] ?>"><?php echo $empleado["nombre_contacto"] ?></option>
                <option value="Santo Domingo">Fijo</option>
                <option value="Santo Domingo">Temporal</option>
                <option value="Santo Domingo">Comision</option>
                <option value="Distrito Nacional">Practicante</option>
            </select>
            </div>
            <div class="col-md-4"><br>
                <label for="">Fecha de nacimiento</label>
                <input class="form-control" value="<?php echo $empleado["fecha_nacimiento"] ?>" type="date" name="fecha"disabled required>
            </div>
            <div class="col-md-4"><br>
                <input class="form-control" value="<?php echo $empleado["puesto"] ?>" type="text" placeholder="Puesto" name="puesto"disabled required>
            </div>
            <div class="col-md-4"><br>
                <input class="form-control" value="<?php echo $empleado["salario"] ?>" type="text" placeholder="Salario" name="salario"disabled  required>
            </div>
            <div class="col-md-4"><br>
                <input class="form-control" value="<?php echo $empleado["departamento"] ?>" type="text" placeholder="Departamento" name="departamento"disabled required>
            </div>
            <div class="col-md-12"><br>
                <textarea class="form-control"  placeholder="Direccion" name="direccion" cols="30" rows="2" disabled><?php echo $empleado["direccion"] ?></textarea>
            </div>
            <div class="col-md-6" ><br>
                <a href="detalles_empleados.php?id=<?php echo $id ?>" class="btn btn-secondary">Cancelar</a>
                <a class="btn btn-warning" id="editar">Editar</a>
            </div>
            <div class="col-md-6"><br>
                <a class="btn btn-primary" id="siguiente1" style="float:right">Siguiente</a>
            </div>
        </div>
    </div>
</div>