<?php
echo $cabecera;

/* imprimir */
//print_r($libro);
?>

<h1>Inicio</h1>

<!-- slider  -->
<div id="carouselExampleControls" class="carousel slide m-5 p-5" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php echo base_url('/public/img/pexels-rodnae-productions-8419636.jpg'); ?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php echo base_url('/public/img/pexels-rodnae-productions-8419635.jpg'); ?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php echo base_url('/public/img/pexels-rodnae-productions-8419263.jpg'); ?>" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- informacion  -->
<div class="container text-dark">
    <div class="row p-2">
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-header">
                    <h3>Api</h3>
                </div>
                <div class="card-body">
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
                </div>
                <div class="card-footer text-muted">
                    <a href="<?= base_url('/api') ?>" class="btn btn-primary">Ver</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-header">
                    <h3>Libros</h3>
                </div>
                <div class="card-body">
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
                </div>
                <div class="card-footer text-muted">
                    <a href="<?= base_url('/ListarLibros') ?>" class="btn btn-primary">Ver</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-header">
                    <h3>Estudiantes</h3>
                </div>
                <div class="card-body">
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
                </div>
                <div class="card-footer text-muted">
                    <a href="<?= base_url('/VerEstudiantes') ?>" class="btn btn-primary">Ver</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-header">
                    <h3>Relaciones</h3>
                </div>
                <div class="card-body">
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
                </div>
                <div class="card-footer text-muted">
                    <a href="<?= base_url('/relaciones') ?>" class="btn btn-primary">Ver</a>
                </div>
            </div>
        </div>
    </div>


<?php
echo $pie;
?>