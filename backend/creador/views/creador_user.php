<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../../../css/login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php $colegio = $_GET["empresa"];?>
    <div style="min-height:100%;">
        <div id="img-fondo">.</div>
        <div id="opacidad" >.</div>
            <div id="box-login" >
                <div id="top" > <strong>Usuario Admin</strong></div>
                <div id="credenciales">
                    <div class="row">
                        <form action="../scripts/creador_user.php" method="post">
                            <div class="col-md-12"><br><br>
                                <input class="form-control"  type="text" value="<?php echo $colegio ?>" name="empresa" id="" placeholder="Colegio">
                            </div>
                            <div class="col-md-12"><br>
                                <input class="form-control" type="text" name="username" id="" placeholder="Usuario">
                            </div>
                            <div class="col-md-12"><br>
                                <input class="form-control" type="text" name="nombre" id="" placeholder="Usuario">
                            </div>
                            <div class="col-md-12"><br>
                                <input class="form-control" type="password" name="contrasena" id="" placeholder="Contraseña">
                            </div>
                            <div class="col-md-12"><br><br>
                                <button class="btn col-md-12" id="init">Crear</button>
                            </div>
                        </form>
                    </div>
                    <div class="fixed-bottom" id="pie"> ©WritedBook by GARP </div>

                </div>
    </div>
</body>
</html>