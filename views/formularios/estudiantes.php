<?php 
include("../menu_lateral.php"); 
?>
<div id="form-estudiantes" style="background-color: white; margin-top:50px; width:60%; padding:20px; margin-left:300px;">
    <div>
    <form action="" method="post">
      <h5> Datos del estudiante </h5> 
        <div class="row">
            <div class="col-md-16"><br>
                <input class="form-control" type="text" name="" placeholder="Nombre del estudiante" id="" require>
            </div>
            <div class="col-md-6"><br>
                <input class="form-control" type="text" placeholder="Apellido" name="" id="" require>
            </div>
            <div class="col-md-6"><br>
                <input class="form-control" type="text" placeholder="Direccion" name="" id="" require>
            </div>
            <div class="col-md-6"><br>
                <input class="form-control" type="text" placeholder="Email" name="" id="" require>
            </div>
            <div class="col-md-6"><br>
                <input class="form-control" type="text" placeholder="000-000-0000" name="" id="" require>
            </div>
            <div><br>
            <select class="form-control" name="meal_preference" id="meal_preference">
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
            <div class="col-md-12"><br>
                <button class="btn btn-danger">Siguiente</button>
            </div>
        </form>
        </div>
    </div>
</div>