<?php
echo $cabecera;

/* imprimir */
//print_r($libro);
?>
<h1>Libros</h1>

<div class="d-inline-block border card border-primary p-4 m-5 text-primary align-middle" id="contenedor">

    <table class="table responsive" id="tb">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titulo</th>
                <th scope="col">Autor</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($libro as $libro) { ?>
            <tr>
                <th scope="row"><?php echo $libro['idLibro'] ?></th>
                <td><?php echo $libro['titulo'] ?></td>
                <td><?php echo $libro['autor'] ?></td>
                <td>
                    <a href="<?php echo base_url('index.php/ControladorLibros/actualizarLibro/' . $libro['idLibro']) ?>"
                        class="btn btn-warning">🖊</a>
                    <a href="<?php echo base_url('index.php/ControladorLibros/eliminarLibro/' . $libro['idLibro']) ?>"
                        class="btn btn-danger">🗑</a>
                </td>
            </tr>
            <?php }
             ?>
        </tbody>
    </table>
</div>

<?php
echo $pie;
?>