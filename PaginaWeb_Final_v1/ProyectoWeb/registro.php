<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="page">        
        <div class="container">
            <div class="left">
                <div class="login">Registrarse</div>
                <div class="eula">Al registrarte acepta los terminos y condiciones
                </div>
            </div>
            <div class="right">
                
                <form class="form" method="POST">
                    <?php 
                    //include = "php/conexion.php"
                    //include = "php/registrarUsuario.php";
                    ?>
                    <label for="email">Usuario</label>
                    <input type="text" id="email" name="usuario">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password">
                    <input type="submit" id="submit" onclick="location.href='inndex.php';" value="Iniciar Sesion">
                    <input type="button" id="submit" onclick="location.href='registro.php';" value="Registrarse">                
            </div>
        </div>
    </div>
</body>
</html>