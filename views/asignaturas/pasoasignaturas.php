<?php 
include("../menu_lateral.php");
?>
<div id="datosnotas">
    <?php
        include("datosnotas.php"); 
    ?>
</div>
<div id="notas">
    <?php
        include("notas.php");
    ?>
</div>


<script>
//formularios inicialmente ocultos
    $("#notas").hide();
    //$("#cercano_madre").hide();
   // $("#cercano_padre").hide();
   // $("#documentos").hide();
//Mostrar notas
    $("#siguiente1").click(function(){
        $("#notas").animate({
            opacity: '1',
        });
        $("#datosnotas").animate({
      opacity: '0.5',
    });
        $("#datosnotas").hide(300);
        $("#notas").show();    
    });
//regresar a datosnotas
    $("#anterior1").click(function(){
        $("#datosnotas").animate({
            opacity: '1'
        });

        $("#notas").animate({
      opacity: '0.5',
    });
        $("#notas").hide(300);
        $("#datosnotas").show();    
    });

</script>