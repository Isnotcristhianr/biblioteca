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
                <h2 class="mb-4 text-center text-warning">Actualizar Libro</h2>
                <form action="<?= base_url('actualizar')?>" method="POST">
                <input type="text" id="idLibro" name="idLibro" hidden value="<?php echo $id?>">
                    <div class="user-box">
                        <input type="text" name="titulo" id="titulo" value="<?php echo $titulo?>">
                        <label for="nombreLibro">Nombre del Libro:</label>
                        
                    </div>
                    <div class="user-box"> 
                        <input type="text" name="autor" id="autor" value="<?php echo $editor?>">
                        <label for="autorLibro">Autor del Libro:</label>
                    </div>
                    <button class="btn btn-warning">Actualizar</button>
                    <a href="<?= base_url('/ListarLibros') ?>" class="btn btn-warning">Atras</a>
                </form>
            </div>
            
        </div>
    </div>
</section>
<?php
echo $pie;
?>