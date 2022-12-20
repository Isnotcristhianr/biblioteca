<?php
echo $cabecera;
?>
<section class="mb-5">
    <div class="text-center table-responsive p-3 m-5">
        <div class="rounded p-4">
            <h2 class="mb-4 text-center text-ligth">Libros</h2>

            <table class="table table-dark table-hover" id="tb">
                <thead>
                    <th>Nombre</th>
                    <th>Autor</th>
                    <th></th>
                    <th></th>
                </thead>
                <tbody>
                    <?php
                        foreach($libros as $libro):
                    ?>
                    <tr>
                        <td><?=$libro['titulo']?></td>
                        <td><?=$libro['autor']?></td>
                        <td><a href="<?=base_url('/obtenerNombre/'.$libro['idLibro'])?>" class="btn btn-warning">🖊</a></td>
                        <td><a href="<?=base_url('/eliminar/'.$libro['idLibro'])?>" class="btn btn-danger">🗑</a></td>
                    </tr>
                    <?php
                        endforeach;
                    ?>
                </tbody>
            </table>
        </div>
        
    </div>

</section>

<?php
echo $pie;
?>