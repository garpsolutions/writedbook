<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../../css/login.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div style="min-height:100%;">
        <div id="img-fondo">.</div>
        <div id="opacidad" >.</div>
            <div id="box-login" >
                <div id="top" > <strong>CREDENCIALES</strong></div>
                <div id="credenciales">
                    <div class="row">
                        <form action="../../scripts/login/login.php" method="post">
                            <div class="col-md-12"><br><br>
                                <input class="form-control"  type="text" name="institucion" id="" placeholder="Colegio">
                            </div>
                            <div class="col-md-12"><br>
                                <input class="form-control" type="text" name="user" id="" placeholder="Usuario">
                            </div>
                            <div class="col-md-12"><br>
                                <input class="form-control" type="password" name="pass" id="" placeholder="Contraseña">
                            </div>
                            <div class="col-md-12"><br><br>
                                <button class="btn col-md-12" id="init"> Iniciar seccion</button>
                            </div>
                        </form>
                    </div>
                    <div class="fixed-bottom" id="pie"> ©WritedBook by GARP </div>

                </div>
    </div>
</body>
</html>
<?php  
if(isset($_GET["credenciales"])){
    ?>
        <script>
        $(document).ready(function(){
            Swal.fire({
            title: 'Usuario o contraseña incorrecto',
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