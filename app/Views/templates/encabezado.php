<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--Boostrap5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <!--FA-->
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <!-- css -->
    <link rel="stylesheet" href="<?php echo base_url('public/css/estilos.css') ?>">
    <!-- js -->
    <script src="<?php echo base_url('public/js/funciones.js') ?>"></script>
</head>

<body>
    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="
                    <?php
                    echo base_url('/inicio');
                    ?>
            ">PUCESI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-nav">

                <a class="nav-link active" aria-current="page" href="
                    <?php
                    echo base_url('/listarEstudiantes');
                    ?>
                    ">Estudiantes</a>
                <a class="nav-link" href="
                    <?php
                    echo base_url('/crearEstudiantes');
                    ?>
                    ">Registrar Estudiantes</a>
                <a class="nav-link active" aria-current="page" href="
                    <?php
                    echo base_url('/listarLibros');
                    ?>
                    ">Libros</a>
                <a class="nav-link" href="
                    <?php
                    echo base_url('/crearLibro');
                    ?>
                    ">Regsitrar Libros</a>
                <a class="nav-link" href="
                    <?php
                    echo base_url('/relaciones');
                    ?>
                    ">Relaciones</a>
            </div>
            <!--navegador busqueda -->
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>