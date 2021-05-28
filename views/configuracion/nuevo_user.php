<?php 
include("../menu_lateral.php");
$roles = $conexion->query("SELECT nombre FROM $institucion.roles ORDER BY id_rol DESC");
?> 
<div id="form-estudiantes" style="background-color: white; margin-top:50px; width:60%; padding-bottom:50px !important; padding:20px; margin-left:24%;">
    <div>
      <h5>Nuevo usuario</h5> 
      <form action="../../scripts/usuarios/agregar.php" method="post">
        <div class="row">
            <div class="col-md-16"><br>
                <input class="form-control" type="text" name="nombre" placeholder="Nombre" id="" required>
            </div>
            <div class="col-md-6"><br>
                <input class="form-control" type="text" placeholder="usuario" name="usuario" id="" required>
            </div>
            <div class="col-md-6"><br>
                <input class="form-control" type="Text" placeholder="Contraseña temporal" name="pass" id="" required>
            </div>
            <div class="col-md-12"><br>
                <select name="rol" class="form-control" id="">
                <?php while($rol = $roles->fetch_assoc())
                {
                ?>
                    <option value="<?php echo $rol['nombre']?>"><?php echo $rol["nombre"]?></option>
                <?php   
                }
               ?>
                </select>
            </div>
            <div class="col-md-6"><br>
               <a href="usuarios.php" class="btn btn-secondary form-control">Cancelar</a>
            </div>
            <div class="col-md-6"><br>
               <button class="btn btn-success form-control">Guardar</button>
            </div>
           
        </div>
        </form>
    </div>
</div>