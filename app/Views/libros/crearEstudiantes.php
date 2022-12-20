<?php
echo $cabecera;

/* imprimir */
//print_r($libro);
?>

<div class="d-inline-block border card border-primary p-4 m-5" id="contenedor">
                <h3 class="text-center text-primary">Datos</h3>
                <!-- Formulario -->
                <form method="POST" action="<?= base_url('/ingresarEst') ?>" enctype="multipart/form-data">
                    <input type="text" name="metodo" value="1" hidden>
                    <div class="mb-3 ">
                        <label class="form-label">Nombro</label>
                        <input type="text" class="form-control" name="namefull" placeholder="ingrese el nombre"
                            required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Cedula (nit)</label>
                        <input type="number" name="cedula" class="form-control" placeholder="ingrese la cedula"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="Sexo">Sexo del Alumno</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sexo" value="M" checked>
                            <label class="form-check-label" for="sexoM">
                                Masculino
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sexo" value="F">
                            <label class="form-check-label" for="sexoF">
                                Fememino
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Edad (int)</label>
                        <input type="number" name="edad" class="form-control" placeholder="ingrese la edad" required>
                    </div>


                    <!--subir png-->

                    <!-- <div class="mb-3">
                        <label for="formFile" class="form-label">Foto del Alumno</label>
                        <input class="form-control" type="file" name="foto" accept="image/png,image/jpeg" required>
                    </div> -->


                    <div class="d-grid gap-2 col-12 mx-auto">
                        <a href="<?= base_url('/VerEstudiante'); ?>" class="btn  btn btn-primary mt-3 mb-2" name="enviar">
                            Registrar nuevo Estudiante
                        </a>
                    </div>

                </form>
            </div>

<?php
echo $pie;
?>