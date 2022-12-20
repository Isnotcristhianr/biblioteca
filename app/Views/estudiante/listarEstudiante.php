<?php
echo $cabecera;
?>
<section class="mb-5">
    <div class="text-center table-responsive p-3 m-5">
        <div class="rounded p-4">
            <h2 class="mb-4 text-center text-ligth">Estudiantes</h2>
            <table class="table table-dark table-hover" id="tb">
                <thead>
                    <th>Nombre</th>
                    <th>Cedula</th>
                    <th>Edad</th>
                    <th>Genero</th>
                    <th></th>
                    <th></th>
                </thead>
                <tbody>
                <?php
                        foreach($estudiantes as $estudiante):
                    ?>
                    <tr>
                        <td><?=$estudiante['nombre']?></td>
                        <td><?=$estudiante['cedula']?></td>
                        <td><?=$estudiante['edad']?></td>
                        <td><?=$estudiante['genero']?></td>
                        <td><a href="<?=base_url()?>/obtenerNombreEst/<?=$estudiante['isEstudiante']?>" class="btn btn-warning">🖊</a></td>
                        <td><a href="<?=base_url()?>/eliminarEst/<?=$estudiante['isEstudiante']?>" class="btn btn-danger">🗑</a></td>
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