<?php
echo $cabecera;
?>

<?php 
    $id=$datos[0]['isEstudiante'];
    $nombre=$datos[0]['nombre'];
    $cedula=$datos[0]['cedula'];
    $edad=$datos[0]['edad'];
    $genero=$datos[0]['genero'];
?>

<section>
<div class="text-center p-3 m-4" style="display: flex; align-items: center; justify-content: center;">
        <div style="display: flex; align-items: center; justify-content: center;">
            <div class="forms-box mt-1">
                <h2 class="mb-4 text-center text-ligth">Actualizar</h2>

                <form action="<?= base_url('actualizarEst')?>" method="POST">
                <input type="text" id="isEstudiante" name="isEstudiante" hidden value="<?php echo $id?>">
                    <div class="user-box">
                    <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre" id="nombre" value="<?php echo $nombre?>" class="input-group mb-3">
                    </div>
                    <div class="user-box">
                    <label for="cedula">Cedula:</label>
                        <input type="text" name="cedula" id="cedula" value="<?php echo $cedula?>" class="input-group mb-3">                        
                    </div>
                    <div class="user-box">
                    <label for="edad">Edad:</label>
                    <input type="text" name="edad" id="edad" value="<?php echo $edad?>" class="input-group mb-3">
                    </div>
                    <div class="mb-3" style="text-align: left;">
                        <label for="Sexo">Genero:</label>
                        <div>
                            <input type="radio" class="form-check-input mt-0" name="genero" value="<?php echo $genero?>">
                            <label for="sexo">
                                Masculino
                            </label>
                        </div>

                        <div>
                            <input type="radio" class="form-check-input mt-0" name="genero" value="Femenino">
                            <label for="sexo">
                                Fememino
                            </label>
                        </div>
                    </div>
                    <button class="btn btn-primary">Actualizar</button>
                    <a href="<?= base_url('/listarEstudiante') ?>" class="btn btn-danger">Atras</a>
                </form>
            </div>
            
        </div>
    </div>
</section>
<?php
echo $pie;
?>