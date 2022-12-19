<?php
echo $cabecera;
?>
<section class="mb-5">
    <div class="text-center table-responsive p-3 m-5">
        <div class="border card rounded p-4" style="background-color: rgb(58, 57, 54);">
            <h2 class="mb-4 text-center text-warning">Todos los libros</h2>

            <table class="table table-warning table-hover">
                <thead>
                    <th>Número</th>
                    <th>Código</th>
                    <th>Nombre del Libro</th>
                    <th>Autor</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </thead>
                <tbody>
                    <?php
                        foreach($libros as $libro):
                    ?>
                    <tr>
                        <td><?=$libro['id']?></td>
                        <td><?=$libro['codigo']?></td>
                        <td><?=$libro['titulo']?></td>
                        <td><?=$libro['editor']?></td>
                        <td><a href="<?php echo base_url().'/obtenerNombre/'.$libro['id']?>" class="btn btn-warning"></a></td>
                        <td><a href="<?php echo base_url().'/eliminar/'.$libro['id']?>" class="btn btn-danger"></a></td>
                    </tr>
                    <?php
                        endforeach;
                    ?>
                </tbody>
            </table>
        </div>
        
    </div>

</section>

