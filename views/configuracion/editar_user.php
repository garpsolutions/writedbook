<?php 
include("../menu_lateral.php");
$roles = $conexion->query("SELECT nombre FROM $institucion.roles ORDER BY id_rol DESC");
$id=$_GET["id"];
$usuario_db = $conexion->query("SELECT * FROM $institucion.usuarios WHERE id_user= $id");
$usuario = $usuario_db->fetch_assoc();
?> 
<div id="form-estudiantes" style="background-color: white; margin-top:50px; width:60%; padding-bottom:50px !important; padding:20px; margin-left:24%;">
    <div>
      <h5>Editar usuario</h5>  
      <form action="../../scripts/usuarios/editar.php" method="post">
        <input type="hidden" value="<?php echo $id?> " name="id">
        <div class="row">
            <div class="col-md-16"><br>
                <input class="form-control" type="text" value="<?php echo $usuario['nombre']; ?> " name="nombre" placeholder="Nombre" id="" require>
            </div>
            <div class="col-md-6"><br>
                <input class="form-control" type="text" value="<?php echo $usuario['user_nombre'];?> " placeholder="usuario" name="usuario" id="" require>
            </div>
            <div class="col-md-6"><br>
                <input class="form-control" type="Text" value="<?php echo $usuario['user_password'];?> " placeholder="Contraseña temporal" name="pass" id="" require>
            </div>
            <div class="col-md-12"><br>
                <label for="">Rol</label>
                <select name="rol" class="form-control" id="">
                <option value="<?php echo $usuario['rol']?>"><?php echo $usuario["rol"]?></option>
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
               <button class="btn btn-secondary form-control">Cancelar</button>
            </div>
            <div class="col-md-6"><br>
               <button class="btn btn-success form-control">Guardar</button>
            </div>
            
        </div>
        </form>
    </div>
</div>