<?php 
include("../menu_lateral.php");
?>
<div id="creacion_de_unidades">
    <?php
        include("creacion_de_unidades.php"); 
    ?>
</div>
<div id="exp_laboral_docentes">
    <?php
        include("exp_laboral_docentes.php");
    ?>
</div>


<script>
//formularios inicialmente ocultos
    $("#exp_laboral_docentes").hide();
//Mostrar notas
    $("#siguiente1").click(function(){
        $("#exp_laboral_docentes").animate({
            opacity: '1',
        });
        $("#creacion_de_unidades").animate({
      opacity: '0.5',
    });
        $("#creacion_de_unidades").hide(300);
        $("#exp_laboral_docentes").show();    
    });
//regresar a datosnotas
    $("#anterior1").click(function(){
        $("#creacion_de_unidades").animate({
            opacity: '1'
        });

        $("#exp_laboral_docentes").animate({
      opacity: '0.5',
    });
        $("#exp_laboral_docentes").hide(300);
        $("#creacion_de_unidades").show();    
    });

</script>