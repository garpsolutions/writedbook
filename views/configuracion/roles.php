<?php 
include("../menu_lateral.php"); 
?> 
<div id="rol">
    <?php 
        include("pasos_roles/rol.php"); 
    ?> 
</div>
<div id="permisos" style="display: none;">
    <?php 
        include("pasos_roles/permisos.php"); 
    ?> 
</div>
<script>
     $("#siguiente1").click(function(){
        $("#permisos").animate({
            opacity: '1',
        });
        $("#rol").animate({
      opacity: '0.5',
    });
        $("#rol").hide(300);
        $("#permisos").show();    
    });
    $("#anterior1").click(function(){
        $("#rol").animate({
            opacity: '1'
        });

        $("#permisos").animate({
      opacity: '0.5',
    });
        $("#permisos").hide(300);
        $("#rol").show();    
    });
</script>