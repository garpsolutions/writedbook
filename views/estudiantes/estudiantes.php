<?php 
include("../menu_lateral.php");
?>
<form action="../../scripts/estudiantes/agregar.php" method="post">
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
    <div id="cercano_madre">
        <?php
            include("pasos/cercanos_madre.php");
        ?>
    </div>
    <div id="cercano_padre">
        <?php
            include("pasos/cercanos_padre.php");
        ?>
    </div>
    <div id="documentos">
        <?php
            include("pasos/documentos.php");
        ?>
    </div>
</form>

<script>
//formularios inicialmente ocultos
    $("#padres").hide();
    $("#cercano_madre").hide();
    $("#cercano_padre").hide();
    $("#documentos").hide();
//Mostrar padres
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
//regresar a estudiante
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
    
//familiares cercanos a la madre
    $("#siguiente2").click(function(){
        $("#cercano_madre").animate({
            opacity: '1',
        });
        $("#padres").animate({
      opacity: '0.5',
    });
        $("#padres").hide(300);
        $("#cercano_madre").show();    
    });

// regresar a padres

$("#anterior2").click(function(){
        $("#padres").animate({
            opacity: '1'
        });

        $("#cercano_madre").animate({
      opacity: '0.5',
    });
        $("#cercano_madre").hide(300);
        $("#padres").show();    
 });

 // Familiar cercano padre
 $("#siguiente3").click(function(){
        $("#cercano_padre").animate({
            opacity: '1',
        });
        $("#cercano_madre").animate({
      opacity: '0.5',
    });
        $("#cercano_madre").hide(300);
        $("#cercano_padre").show();    
});

//regresar a familiar cercano a la madre
$("#anterior3").click(function(){
        $("#cercano_madre").animate({
            opacity: '1'
        });

        $("#cercano_padre").animate({
      opacity: '0.5',
    });
        $("#cercano_padre").hide(300);
        $("#cercano_madre").show();    
 });


 // Documentos
 $("#siguiente4").click(function(){
        $("#documentos").animate({
            opacity: '1',
        });
        $("#cercano_padre").animate({
      opacity: '0.5',
    });
        $("#cercano_padre").hide(300);
        $("#documentos").show();    
});

$("#anterior4").click(function(){
        $("#cercano_padre").animate({
            opacity: '1'
        });

        $("#documentos").animate({
      opacity: '0.5',
    });
        $("#documentos").hide(300);
        $("#cercano_padre").show();    
 });
</script>
<?php 
  if(isset($_GET["back"])){
    ?>
    <script>
       $(document).ready(function(){
            Swal.fire({
            title: 'El estudiante ha sido creado',
            showClass: {
            popup: 'animate__animated animate__fadeInDown'
        },
        hideClass: {
        popup: 'animate__animated animate__fadeOutUp'
        }
        });
      });
    </script>
<?php 
  }
?>  

