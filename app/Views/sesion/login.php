<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/login.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/estilos.css">

    <!-- boostrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <!-- js -->
    <script src="<?php echo base_url('public/js/funcionesLog.js') ?>"></script>

</head>

<body>
    <div class="conten">
        <div class="text1">
            <h1>Inicio de sesion</h1>
        </div>
        <div class="men">
            <div class="img">
                <img style='filter: invert(1)' src="https://img.icons8.com/metro/512/mac-os.png" width="5%" />
            </div>
            <div class="img2">
                <img src="https://www.freepnglogos.com/uploads/google-logo-png/google-logo-png-suite-everything-you-need-know-about-google-newest-0.png"
                    width="5%" />
            </div>
        </div>
        <div class="orl">
            <hr />
            OR
        </div>
        <!-- Sesion -->
        <form action="<?= base_url('/login2')?>" method="POST">
            <div class="id">
                <div class="ename">
                    <input type="text" placeholder="Usuario" name="user"/>
                </div>
                <div class="ename">
                    <input type="password" placeholder="Contraseña" name="pass"/>
                </div>
                <div class="id2">
                    <div class="nex">
                        <button>Ingresar</button>
                    </div>
                </div>
                <div class="txt">
                    <p>¿No tienes una cuenta? <a href="#">Registrate</a></p>
                </div>
            </div>
        </form>

    </div>

<div style="height: 150px;"></div>

    <?php
echo $pie;
?>