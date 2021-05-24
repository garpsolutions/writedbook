<?php 
include("../menu_lateral.php"); 
?> 
<div id="form-estudiantes" style="background-color: white; margin-top:50px; width:60%; padding-bottom:50px !important; padding:20px; margin-left:24%;">
    <div>
      <h5>Nuevo usuario</h5> 
      <form action="../../scripts/usuarios/agregar.php" method="post">
        <div class="row">
            <div class="col-md-16"><br>
                <input class="form-control" type="text" name="nombre" placeholder="Nombre" id="" require>
            </div>
            <div class="col-md-6"><br>
                <input class="form-control" type="text" placeholder="usuario" name="usuario" id="" require>
            </div>
            <div class="col-md-6"><br>
                <input class="form-control" type="Text" placeholder="Contraseña temporal" name="pass" id="" require>
            </div>
            <div class="col-md-12"><br>
                <select name="rol" class="form-control" id="">
                    <option value="secre">Secretaria</option>
                    <option value="docente">Docente</option>
                    <option value="director">Director</option>
                    <option value="admin">Administrador</option>
                    <option value="contador">Contador</option>
                </select>
            </div>
            <div class="col-md-6"><br>
               <button class="btn btn-success form-control">Guardar</button>
            </div>
            <div class="col-md-6"><br>
               <button class="btn btn-secondary form-control">Cancelar</button>
            </div>
        </div>
        </form>
    </div>
</div>