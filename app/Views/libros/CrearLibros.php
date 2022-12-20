<?php
echo $cabecera;
?>
<section>
    <div class="text-center p-5h jnm m-5" style="display: flex; align-items: center; justify-content: center;">
        <div style="display: flex; align-items: center; justify-content: center;">
            <div class="forms-box mt-4">
                <h2 class="mb-4 text-center text-ligth">Registro Libros</h2>

                <form action="<?= base_url('/ingresar') ?>" method="POST">
                    <div class="user-box">
                        <label for="nombreLibro">Nombre del Libro:</label>
                        <input type="text" name="titulo" id="titulo" class="input-group mb-3" required >

                    </div>
                    <div class="user-box">
                        <label for="autorLibro">Autor del Libro:</label>
                        <input type="text" name="autor" id="autor" class="input-group mb-3" required>
                    </div>
                    <button class="btn btn-primary">Ingresar</button>
                </form>
            </div>

        </div>
    </div>
</section>

<?php
echo $pie;
?>