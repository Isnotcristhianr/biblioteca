<?php
echo $cabecera;

/* imprimir */
//print_r($libro);
?>

<div style="align-items: center; justify-content: center;">
<h1>Estudiantes</h1>

       <!--VISTA DE LOS ESTUDIANTES-->

       <div class="d-inline-block border card border-primary p-4 m-5 text-primary" id="contenedor">
            <h3>Listado</h3>
            <table class="table responsive" id="tb">
                <thead>
                    <tr>
                        <th id="cedula">Nombre</th>
                        <th id="nombre">Cedula</th>
                        <th id="edad">Edad</th>
                        <th id="genero">Genero</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($estudiante as $estudiante) { ?>
                        <tr>
                            <th scope="row"><?php echo $estudiante['isEstudiante'] ?></th>
                            <td><?php echo $estudiante['cedula'] ?></td>
                            <td><?php echo $estudiante['nombre'] ?></td>
                            <td><?php echo $estudiante['edad'] ?></td>
                            <td><?php echo $estudiante['genero'] ?></td>
                            <td><a href="<?php echo base_url('index.php/ControladorEstudiantes/actualizarEstudiante/' . $estudiante['isEstudiante']) ?>" class="btn btn-warning">🖊</a></td>
                            <td><a href="<?php echo base_url('index.php/ControladorEstudiantes/eliminarEstudiante/' . $estudiante['isEstudiante']) ?>" class="btn btn-danger">🗑</a></td>
                        </tr>
                    <?php }
                    ?>                    

                </tbody>
            </table>

        </div>

</div>


<?php
echo $pie;
?>