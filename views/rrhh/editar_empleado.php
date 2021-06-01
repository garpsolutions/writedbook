
<?php 
include("../menu_lateral.php"); 
$id=$_GET["id"];
$empleado_db=$conexion->query("SELECT * FROM $institucion.empleados WHERE id_empleado = $id");
$empleado= $empleado_db->fetch_assoc();
?>
<form action="../../scripts/rrhh/nuevo_empleado.php" method="post">
<div id="datos_personales">
<?php 
    include("pasos_modificar/datos_personales.php"); 
?>
</div>
<div id="contacto_emergencia">
<?php 
    include("pasos_modificar/contacto_emergencia.php"); 
?>
</div>
</form>
<script>
    $("#contacto_emergencia").hide();


    $("#siguiente1").click(function(){
        $("#contacto_emergencia").animate({
            opacity: '1',
        });
        $("#datos_personales").animate({
      opacity: '0.5',
    });
        $("#datos_personales").hide(300);
        $("#contacto_emergencia").show();    
    });
//regresar a estudiante
    $("#anterior1").click(function(){
        $("#datos_personales").animate({
            opacity: '1'
        });

        $("#contacto_emergencia").animate({
      opacity: '0.5',
    });
        $("#contacto_emergencia").hide(300);
        $("#datos_personales").show();    
    });
</script>