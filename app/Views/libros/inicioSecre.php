<?php
echo $cabecera;

/* imprimir */
//print_r($libro);
?>
<section class="mb-5">
    <div class="text-center table-responsive p-3 m-5">
        <div class="rounded p-4">
            <h2 class="mb-4 text-center text-ligth">Libros</h2>

            <table class="table table-dark table-hover" id="tb">
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
<?php
echo $pie;
?>