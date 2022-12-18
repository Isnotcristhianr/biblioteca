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
<div class="container m-5 p-5">
    <div class="row">
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title
                    ">Libros</h5>
                    <p class="card-text">Cantidad de libros: <?php echo $libro; ?></p>
                    <a href="<?php echo base_url('/listarLibros'); ?>" class="btn btn-primary">Ver libros</a>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title
                    ">Estudiantes</h5>
                    <p class="card-text">Cantidad de estudiantes: <?php echo $estudiante; ?></p>
                    <a href="<?php echo base_url('/listarEstudiantes'); ?>" class="btn btn-primary">Ver estudiantes</a>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title
                    ">Relaciones</h5>
                    <p class="card-text">Cantidad de relaciones: <?php echo $relacion; ?></p>
                    <a href="<?php echo base_url('/relaciones'); ?>" class="btn btn-primary">Ver relaciones</a>
                </div>
            </div>
        </div>
    </div>
</div>





<?php
echo $pie;
?>