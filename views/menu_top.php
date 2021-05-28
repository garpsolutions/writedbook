<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/menu.css">
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div id="menu_top">
        <div class="row">
            <div class="col-md-6">
                <i class="fa fa-bars fa-2x" id="boton-togle"></i>
            </div>
            <div class="col-md-6">
                <div style="float: right;">
                    <div style="float: left; margin-right: 25px;">
                        <img src="../../img/tes.png" width="35" alt="">
                    </div>
                    <div style="float: left; color:white">
                        <div id="user_log">
                            <?php echo $usuario ?>
                        </div>
                        <div class="row" id="usuario_menu" style="position:absolute; display:none;">
                            <div class="col-md-6"> <a style="color:white;"  href="../configuracion/editar_user2.php?user=<?php echo $usuario;?>"><i class="fa fa-cog"></i></a></div>
                            <div class="col-md-6"><a style="color:white;" href="../../scripts/login/salir.php"><i class=" fa fa-lock"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>                    
    </div>
</body>
</html>
<script>
     $("#user_log").click(function(){
        $("#usuario_menu").toggle();
     });
     $(".fa").mouseover(function(){
        $(this).css("font-size","23px")
     });
     $(".fa").mouseout(function(){
        $(this).css("font-size","18px")
     });
 
</script>