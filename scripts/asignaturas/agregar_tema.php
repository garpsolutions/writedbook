<?php
    include("../../backend/conexion/cone.php");
    
    //variables de session
    session_start();
    $institucion = $_SESSION["institucion"];
    $usuario_actual= $_SESSION['user'];
    $nombre = $_POST["tema"];
    $id_unidad = $_POST["unidad"];
    $fecha_inicio = $_POST["fecha_inicio"];
    $fecha_cierre = $_POST["fecha_cierre"];

    if($fecha_inicio > $fecha_cierre){
            //header("location:../../views/asignaturas/planificacion.php?mayor=true");
    }
    else{
        $conexion->query("INSERT INTO $institucion.temas (tema, id_unidad, fecha_inicio, fecha_cierre, creado_por) VALUES('$nombre',$id_unidad,'$fecha_inicio','$fecha_cierre','$usuario_actual') ");
    }
        ?>
        <div class="row" style="margin-top: 5px;">
            <div class="col-md-6">dsfsdf</div>
            <div class="col-md-6">
                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                <form action="" id="ver_items">
                    <input type="submit" class="btn btn-info" value="add">
                </form>
            </div>
        </div>
    <?php
    
?>