<?php 
include("../menu_lateral.php");
?>
<div id="form-estudiantes" style="background-color: white; margin-top:50px; width:75%; padding:20px; margin-left:300px;">
    <div>
        <h5>Creacion docente</h5><br>
        <div class="row">
            <div class="col-md-6">
                <small>Vinculacion de empleado</small>
                <select class="form-control" name="docentes" id="">
                    <option value="">Wilfred </option>
                    <option value="">Anthony </option>
                    <option value="">Neitan </option>
                    <option value="">Freddy </option>
                    <option value="">Jocias</option>
                    <option value="">Jorge</option>
                </select>
            </div>
            <div class="col-md-6">
                <small>Vinculacion de usuario</small>
                <select class="form-control" name="docentes" id="">
                    <option value="">Corleonex</option>
                    <option value="">Anthony </option>
                    <option value="">Neitan </option>
                    <option value="">Freddy </option>
                    <option value="">Jocias</option>
                    <option value="">Jorge</option>
                </select>
            </div>
        </div><br>
        
        <div class="row">
            <div class="col-md-6">
                <small>Materias que puede impartir</small>
                <div class="row">
                    <div class="col-md-8">
                        <select name="" class="form-control" id="">
                            <option value="Matematica">Matematica</option>
                            <option value="Matematica">Sociales</option>
                            <option value="Matematica">Lengua Española</option>
                        </select> <br> <br>
                        <input class="btn btn-primary" type="submit" value="Crear docente">
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-primary"><strong>+</strong></button>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <small>Materias agregadas</small>
                <div style="border:solid 1px rgb(180, 179, 179); border-radius:10px; padding:15px;">
                    <div class="row" style="padding: 10px;">
                        <div class="col-md-8">Matematicas </div>
                        <div class="col-md-4"> <button class="btn btn-danger">x</button></div>
                    </div>
                    <div class="row" style="padding: 10px;">
                        <div class="col-md-8">Sociales </div>
                        <div class="col-md-4"><button class="btn btn-danger">x</button></div>
                    </div>
                    <div class="row" style="padding: 10px;">
                        <div class="col-md-8">Lengua Española</div>
                        <div class="col-md-4"><button class="btn btn-danger">x</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>