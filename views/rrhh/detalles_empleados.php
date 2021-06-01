<?php 
include("../menu_lateral.php"); 
$id=$_GET["id"];
$empleado_db=$conexion->query("SELECT nombre, puesto FROM $institucion.empleados WHERE id_empleado = $id");
$empleado= $empleado_db->fetch_assoc();
?>
<link rel="stylesheet" href="../../css/detalles.css">
<div id="perfil_estudiante" class="row" >
    <div id="box">
        <div class="row">
            <div class="col-md-6" style="border-right:solid 3px gray;">
                <div>
                    <img src="../../img/pp.jpg"class="img-fluid" width="300px" style="border:solid 5px gray; border-radius:175px" alt=""><br><br>
                    <center>
                    <?php echo $empleado["nombre"] ?><br> <?php echo $empleado["puesto"] ?><br>
                        <strong> Activo </strong> 
                    </center>
                    
                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <div>
                        <a href="editar_empleado.php?id=<?php echo $id ?>" class="btn btn form-control opcion">Informacion</a>
                    </div>
                    <div> <br>
                        <a href="historial.php"><button class="btn btn form-control opcion">Permisos</button></a>
                    </div>
                    <div><br>
                        <button class="btn btn form-control opcion" id="informacion" >Vacaciones</button>
                    </div>
                    <div><br>
                        <a href="record_notas.php"><button class="btn btn form-control opcion">Record de notas</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="informacion">
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


<script>
//formulario disabled
    $(".campo").attr("disabled","true");
//formulario activo
    $(".editar").click(function(){
        alert("fgdfgh");
    });

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