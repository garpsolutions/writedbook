<?php 
include("../menu_lateral.php"); 
?> 
<div id="form-estudiantes" style="background-color: white; margin-top:50px; width:60%; padding-bottom:50px !important; padding:20px; margin-left:24%;">
    <div>
      <h5>Nuevo usuario</h5> 
        <div class="row">
            <div class="col-md-16"><br>
                <input class="form-control" type="text" name="" placeholder="Nombre" id="" require>
            </div>
            <div class="col-md-6"><br>
                <input class="form-control" type="text" placeholder="usuario" name="" id="" require>
            </div>
            <div class="col-md-6"><br>
                <input class="form-control" type="Text" placeholder="Contraseña temporal" name="" id="" require>
            </div>
            <div class="col-md-12"><br>
                <select name="" class="form-control" id="">
                    <option value="">Secretaria</option>
                    <option value="">Docente</option>
                    <option value="">Director</option>
                    <option value="">Administrador</option>
                    <option value="">Contador</option>
                </select>
            </div>
            <div class="col-md-6"><br>
               <button class="btn btn-success form-control">Guardar</button>
            </div>
            <div class="col-md-6"><br>
               <button class="btn btn-danger form-control">Cancelar</button>
            </div>
        </div>
    </div>
</div>