<?php
echo $cabecera;
?>
<section class="mb-5">
    <div class="text-center table-responsive p-3 m-5">
        <div class="border card rounded p-4" style="background-color: rgb(58, 57, 54);">
            <h2 class="mb-4 text-center text-warning">Todos los Estudiantes</h2>
            <table class="table table-warning table-hover">
                <thead>
                    <th>Número</th>
                    <th>Nombre</th>
                    <th>Cedula</th>
                    <th>Edad</th>
                    <th>Genero</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </thead>
                <tbody>
                <?php
                        foreach($estudiantes as $estudiante):
                    ?>
                    <tr>
                        <td><?=$estudiante['id']?></td>
                        <td><?=$estudiante['nombre']?></td>
                        <td><?=$estudiante['cedula']?></td>
                        <td><?=$estudiante['edad']?></td>
                        <td><?=$estudiante['genero']?></td>
                        <td><a href="<?php echo base_url().'/obtenerNombreEst/'.$estudiante['id']?>" class="btn btn-warning"></a></td>
                        <td><a href="<?php echo base_url().'/eliminarEst/'.$estudiante['id']?>" class="btn btn-danger"></a></td>
                    </tr>
                    <?php
                        endforeach;
                    ?>
                    
                </tbody>
            </table>
        </div>
        
    </div>

</section>
