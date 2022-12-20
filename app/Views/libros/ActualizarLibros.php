<?php
echo $cabecera;
?>

<?php 
    $id=$datos[0]['idLibro'];
    $titulo=$datos[0]['titulo'];
    $editor=$datos[0]['autor'];
?>

<section>
    <div class="text-center p-3 m-5" style="display: flex; align-items: center; justify-content: center;">
        <div style="display: flex; align-items: center; justify-content: center;">
            <div class="forms-box mb-4 mt-5">
                <h2 class="mb-4 text-center text-ligth">Actualizar Libro</h2>
                <form action="<?= base_url('actualizar')?>" method="POST">
                <input type="text" id="idLibro" name="idLibro" hidden value="<?php echo $id?>">
                    <div class="user-box">
                    <label for="nombreLibro">Nombre</label>
                        <input type="text" class="input-group mb-3" name="titulo" id="titulo" value="<?php echo $titulo?>">                        
                    </div>
                    <div class="user-box"> 
                    <label for="autorLibro">Autor</label>
                        <input type="text" class="input-group mb-3" name="autor" id="autor" value="<?php echo $editor?>">
                    </div>
                    <button class="btn btn-primary">Actualizar</button>
                    <a href="<?= base_url('/ListarLibros') ?>" class="btn btn-danger">Atras</a>
                </form>
            </div>
            
        </div>
    </div>
</section>

<?php
echo $pie;
?>