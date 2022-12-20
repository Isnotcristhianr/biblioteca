<?php
echo $cabecera;
?>
<section class="mb-5">
    <div class="text-center table-responsive p-3 m-5">
        <div class="border card rounded p-4" style="background-color: rgb(58, 57, 54);">
            <h2 class="mb-4 text-center text-warning">Todos los libros</h2>

            <table class="table table-warning table-hover">
                <thead>
                    <th>Nombre</th>
                    <th>Autor</th>
                </thead>
                <tbody>
                    <?php
                        foreach($libros as $libro):
                    ?>
                    <tr>
                        <td><?=$libro['titulo']?></td>
                        <td><?=$libro['autor']?></td>
                    </tr>
                    <?php
                        endforeach;
                    ?>
                </tbody>
            </table>
        </div>
        
    </div>

</section>

