<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../scripts/creador_user.php" method="post">
        <input type="text" name="username" id="">
        <input type="text" name="contrasena" id="">
        <input type="text" name="nombre" id="">
        <input type="text" name="empresa" value="<?php echo $_GET["empresa"]; ?>">
        <button>Enviar</button>
    </form>
</body>
</html>