<?php 
include("../menu_lateral.php");
?>
<div id="estudiante">
    <?php
        include("pasos/estudiante.php"); 
    ?>
</div>
<div id="padres">
    <?php
        include("pasos/padres.php");
    ?>
</div>


<script>
    $("#padres").hide();
    $("#siguiente1").click(function(){
        $("#padres").animate({
            opacity: '1',
        });
        $("#estudiante").animate({
      opacity: '0.5',
    });
        $("#estudiante").hide(300);
        $("#padres").show();    
    });
    $("#anterior1").click(function(){
        $("#estudiante").animate({
            opacity: '1'
        });

        $("#padres").animate({
      opacity: '0.5',
    });
        $("#padres").hide(300);
        $("#estudiante").show();    
    });
</script>

