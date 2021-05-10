<?php 
include("../menu_lateral.php");
?>
<div id="agregar_docente">
    <?php
        include("agregar_docente.php"); 
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
        $("#agregar_docente").animate({
      opacity: '0.5',
    });
        $("#agregar_docente").hide(300);
        $("#exp_laboral_docentes").show();    
    });
//regresar a datosnotas
    $("#anterior1").click(function(){
        $("#agregar_docente").animate({
            opacity: '1'
        });

        $("#exp_laboral_docentes").animate({
      opacity: '0.5',
    });
        $("#exp_laboral_docentes").hide(300);
        $("#agregar_docente").show();    
    });

</script>