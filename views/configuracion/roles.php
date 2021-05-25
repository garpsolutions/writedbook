<?php 
include("../menu_lateral.php"); 
?> 
<div id="form-estudiantes" style="background-color: white; margin-top:50px; width:60%; padding-bottom:50px !important; padding:20px; margin-left:24%;">
    <div>
      <h5>Nuevo Rol</h5> 
      <form action="../../scripts/roles/agregar.php" method="post">
        <div class="row">
            <div class="col-md-16"><br>
                <input class="form-control" type="text" name="nombre" placeholder="Nombre del rol" id="" required>
            </div>
            <div class="col-md-6"><br>
               <button class="btn btn-danger form-control">Cancelar</button>
            </div>
            <div class="col-md-6"><br>
               <input type="submit" id="siguiente1" class="btn btn-primary form-control" value="Siguiente"/>
            </div>
        </div>
      </form>
    </div>
</div>
