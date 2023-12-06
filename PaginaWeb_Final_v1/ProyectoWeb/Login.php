<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <span class="snow-container" id="snow-container"></span>

    <div class="page">        
        <div class="container">
            <div class="left">
                <div class="login">Iniciar Sesion</div>
                <div class="eula">Al iniciar sesion aceptas los terminos y condiciones
                </div>
            </div>
            <div class="right">
                
                <form class="form" method="POST">
                    <?php 
                    //include = "php/conexion.php"
                    //include = "php/logearse.php";
                    ?>
                    <label for="email">Usuario</label>
                    <input type="text" id="email" name="usuario">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password">
                    <input type="submit" id="submit" value="Iniciar Sesion">
                    <input type="button" id="submit" onclick="location.href='registro.php';" value="Registrarse">                
            </div>
        </div>
    </div>
</body>

<style>
    
    body {
        background: rgb(132, 128, 128);
        font-family: 'Inter UI', sans-serif;
        margin: 0;
        padding: 20px;
        overflow: hidden;
    }

    .page {
        background: rgb(180, 168, 147);
        display: flex;
        flex-direction: column;
        height: calc(100% - 40px);
        position: absolute;
        place-content: center;
        width: calc(100% - 40px);
        z-index: 0;
    }

    @media (max-width: 767px) {
        .page {
            height: auto;
            margin-bottom: 20px;
            padding-bottom: 20px;
        }
    }

    .container {
        display: flex;
        height: 320px;
        margin: 0 auto;
        width: 640px;
    }

    @media (max-width: 767px) {
        .container {
            flex-direction: column;
            height: 630px;
            width: 320px;
        }
    }

    .left {
        background: white;
        height: calc(100% - 40px);
        top: 20px;
        position: relative;
        width: 50%;
    }

    @media (max-width: 767px) {
        .left {
            height: 100%;
            left: 20px;
            width: calc(100% - 40px);
            max-height: 270px;
        }
    }

    .login {
        font-size: 50px;
        font-weight: 900;
        margin: 50px 40px 40px;
    }

    .eula {
        color: #999;
        font-size: 14px;
        line-height: 1.5;
        margin: 40px;
    }

    .right {
        background: #574330;
        box-shadow: 0px 0px 40px 16px rgba(0, 0, 0, 0.22);
        color: #F1F1F2;
        position: relative;
        width: 50%;
    }

    @media (max-width: 767px) {
        .right {
            flex-shrink: 0;
            height: 100%;
            width: 100%;
            max-height: 350px;
        }
    }

    svg {
        position: absolute;
        width: 320px;
    }

    path {
        fill: none;
        stroke: url(#linearGradient);
        ;
        stroke-width: 4;
        stroke-dasharray: 240 1386;
    }

    .form {
        margin: 40px;
        position: absolute;
    }

    label {
        color: #c2c2c5;
        display: block;
        font-size: 14px;
        height: 16px;
        margin-top: 20px;
        margin-bottom: 5px;
    }

    input {
        background: transparent;
        border: 0;
        color: #f2f2f2;
        font-size: 20px;
        height: 30px;
        line-height: 30px;
        outline: none !important;
        width: 100%;
    }

    input::-moz-focus-inner {
        border: 0;
    }

    #submit,
    #btnRegistro {
        color: #e3e3e7;
        margin-top: 25px;
        transition: color 300ms;
    }

    #submit:focus,
    #btnRegistro:focus {
        color: #f2f2f2;
    }

    #submit:active,
    #btnRegistro:active {
        color: #d0d0d2;
    }

    /*Nieve*/
    .snowflake {
        position: absolute;
        width: 10px;
        height: 10px;
        background-color: #fff;
        border-radius: 50%;
        animation: fall linear infinite;
        z-index: -1;
    }

    @keyframes fall {
  to {
    transform: translateY(100vh);
  }
}
</style>
<script src="javascript/snow.js"></script>


</html>