<?php 
include("../menu_lateral.php");
$id = $_GET["id"];
$estudiante_db = $conexion->query("SELECT * FROM $institucion.estudiantes WHERE id_estudiante= $id");
$estudiante= $estudiante_db->fetch_assoc();
?>
<div id="perfil_estudiante" class="row" >
    <div style="background-color: white; width:600px; margin-top:50px;padding:40px; margin-left:8%;">
        <div class="row">
            <div class="col-md-6" style="border-right:solid 3px gray;">
                <div>
                    <img src="../../img/pp.jpg"class="img-fluid" width="300px" style="border:solid 5px gray; border-radius:175px" alt=""><br><br>
                    <center>
                        <?php echo $estudiante["nombre"]." ". $estudiante["apellido_materno"]." ". $estudiante["apellido_paterno"];?>, 4to C <br>
                        <strong> Activo </strong> 
                    </center>
                    
                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <div>
                        <button class="btn btn form-control" id="indice"style="background-color: rgb(11, 11, 53);color:white">índice</button>
                    </div>
                    <div> <br>
                        <a href="historial.php?id=<?php echo $id ?>"><button class="btn btn form-control" style="background-color: rgb(11, 11, 53);color:white"> Historial estudiantil</button></a>
                    </div>
                    <div> <br>
                        <a href="insidencias.php?id=<?php echo $id ?>"><button class="btn btn form-control" style="background-color: rgb(11, 11, 53);color:white">Reportes de insidencia </button></a>
                    </div>
                    <div><br>
                        <button class="btn btn form-control" id="informacion" style="background-color: rgb(11, 11, 53);color:white">Información</button>
                    </div>
                    <div><br>
                        <a href="record_notas.php"><button class="btn btn form-control" style="background-color: rgb(11, 11, 53);color:white">Record de notas</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="informacion">
<form action="../../scripts/estudiantes/editar_estudiante.php" method="post">
<div id="estudiante">
    <?php
        include("paso_modificar/estudiante.php"); 
    ?>
</div>
<div id="padres">
    <?php
        include("paso_modificar/padres.php");
    ?>
</div>
<div id="cercano_madre">
    <?php
        include("paso_modificar/cercanos_madre.php");
    ?>
</div>
<div id="cercano_padre">
    <?php
        include("paso_modificar/cercanos_padre.php");
    ?>
</div>
<div id="documentos">
    <?php
        include("paso_modificar/documentos.php");
    ?>
</div>
</form>


<script>
//formulario disabled
    $(".campo").attr("disabled","true");

//formularios inicialmente ocultos
    $("#padres").hide();
    $("#cercano_madre").hide();
    $("#cercano_padre").hide();
    $("#documentos").hide();
    $("#estudiante").hide();
//Mostrar padres
    $("#informacion").click(function(){
        $("#perfil_estudiante").hide();
        $("#estudiante").show();
    });
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

$("#indice").click(function(){
    Swal.fire({
        title: 'El índice academico del estudiante es: 5',
        showClass: {
        popup: 'animate__animated animate__fadeInDown'
        },
        hideClass: {
        popup: 'animate__animated animate__fadeOutUp'
        }
    });
});

</script>