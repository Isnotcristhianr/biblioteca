<?php
echo $cabecera;
?>
<section>
    <div class="text-center p-3 m-4" style="display: flex; align-items: center; justify-content: center;">
        <div style="display: flex; align-items: center; justify-content: center;">
            <div class="forms-box mt-1">
                <h2 class="mb-4 text-center text-warning">Ingreso de Estudiantes</h2>

                <form action="<?= base_url('/ingresarEst')?>" method="POST" enctype="multipart/form-data">

                    <div class="user-box">
                        <input type="text" name="nombre" id="nombre" required>
                        <label for="nombre">Nombre:</label>
                    </div>

                    <div class="user-box">
                        <input type="text" name="cedula" id="cedula" required>
                        <label for="cedula">Cedula:</label>
                    </div>

                    <div class="user-box">
                        <input type="text" name="edad" id="edad" required>
                        <label for="edad">Edad:</label>
                    </div>

                    <div class="mb-3" style="color: white; text-align: left;">
                        <label for="sexo">Genero:</label>

                        <div>
                            <input type="radio" name="genero" value="Masculino" checked>
                            <label for="M">
                                Masculino
                            </label>
                        </div>

                        <div>
                            <input type="radio" name="genero" value="Femenino">
                            <label for="F">
                                Fememino
                            </label>
                        </div>

                    </div>

                    <div class="d-grid gap-2 col-12 mx-auto">
                        <a href="<?= base_url('/VerEstudiante'); ?>" class="btn  btn btn-primary mt-3 mb-2"
                            name="enviar">
                            Registrar nuevo Estudiante
                        </a>
                    </div>

                </form>
            </div>

        </div>
    </div>
</section>

<?php
echo $pie;
?>