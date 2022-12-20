<?php
echo $cabecera;
?>
<section>
    <div class="text-center p-3 m-4" style="display: flex; align-items: center; justify-content: center;">
        <div style="display: flex; align-items: center; justify-content: center;">
            <div class="forms-box mt-1">
                <h2 class="mb-4 text-center text-dark">Registro de Estudiantes</h2>

                <form action="<?= base_url('/ingresarEst')?>" method="POST" enctype="multipart/form-data">

                    <div class="user-box">
                    <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre" id="nombre" class="input-group mb-3" required>
                    </div>

                    <div class="user-box">
                    <label for="cedula">Cedula:</label>
                        <input type="text" name="cedula" id="cedula" class="input-group mb-3" required>
                    </div>

                    <div class="user-box">
                    <label for="edad">Edad:</label>
                        <input type="text" name="edad" id="edad" class="input-group mb-3" required>
                    </div>

                    <div class="mb-3" style="text-align: center;">
                        <label for="sexo">Genero:</label>

                        <div>
                            <input type="radio" name="genero"  class="form-check-input mt-0" value="Masculino" checked>
                            <label for="M">
                                Masculino
                            </label>
                        </div>

                        <div>
                            <input type="radio"  class="form-check-input mt-0" name="genero" value="Femenino">
                            <label for="F">
                                Fememino
                            </label>
                        </div>

                    </div>

                    <div class="d-grid gap-2 col-12 mx-auto">
                        <button class="btn  btn btn-primary mt-3 mb-2"
                            name="enviar">
                            Ingresar
                        </button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</section>

<?php
echo $pie;
?>