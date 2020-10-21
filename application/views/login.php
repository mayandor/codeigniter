<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css"></link>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/login.css">
    <title>Login</title>
</head>
<body>
        <div class="login-page">
            <form method="POST" action="http://localhost/examen_codeigniter/index.php/Welcome/dashboard">
                <div class="imgcontainer">
                    <img class="avatar" src="img/avatar.jpg" alt="alt">
                </div>
                <div class="container">
                    <label for="ci"><b>Username</b></label>
                    <input type="text" name="username">

                    <label for="ci"><b>Contraseña</b></label>
                    <input type="password" placeholder="*****" name="clave">

                    <label for="ci"><b>Color </b></label>
                    <input type="color" name="color" value="#06075B">
                    <p>
                    <label for="foto"><b>Foto Sesion</b></label>
                    <input name="foto" type="file">
                    </p>
                    <button type="submit">Ingresar</button>
                </div>
            </form>
        </div>
    </body>
</html>