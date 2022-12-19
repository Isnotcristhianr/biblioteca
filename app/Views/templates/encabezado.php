<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIBLIOTECA</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/style.css">
    <script type='text/javascript' src="<?php echo base_url(); ?>/js/js.js"></script>
    
</head>

<body>
    <header>
        <div class="bg-dark">
            <img src="#" alt="logo">
        </div>
        <nav class="bg-dark text-center">
                <ul class="navlist">
                    <li>
                        <a href="<?= base_url('/CrearLibros') ?>
                        ">Ingresar libros</a>
                    </li>
                    <li>
                        <a href="<?= base_url('/ListarLibros') ?>
                        ">Ver libros</a>
                    </li>
                    <li>
                    <a href="<?= base_url('/CrearEstudiante') ?>
                        ">Ingresar estudiantes</a>
                    </li>
                    <li>
                    <a href="<?= base_url('/VerEstudiante') ?>
                        ">Ver estudiantes</a>
                    </li>
                </ul>
            </nav>
    </header>

        