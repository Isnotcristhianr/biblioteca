<?php
echo $cabecera;

/* imprimir */
//print_r($libro);
?>

<h1>Relaciones</h1>

<!-- tabla relaciones entre alumno y libro -->
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Libro</th>
            <th scope="col">Fecha</th>
        </tr>
    </thead>
    <tbody>
        <?php
        /* 
        foreach ($relacion as $key => $value) {
        ?>
            <tr>
                <th scope="row"><?php echo $value['id']; ?></th>
                <td><?php echo $value['nombre']; ?></td>
                <td><?php echo $value['apellido']; ?></td>
                <td><?php echo $value['titulo']; ?></td>
                <td><?php echo $value['fecha']; ?></td>
            </tr>
        <?php
        } */
        ?>
    </tbody>


<?php
echo $pie;
?>