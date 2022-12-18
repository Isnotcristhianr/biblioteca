<?php
    echo $cabecera;
?>

<h1>Registrar Libros</h1>

<div class="container container-md">

    <div class="d-inline-block border card border-primary p-4 m-5" id="contenedor">
        <h3 class="text-center text-primary">Datos</h3>
        <!-- Formulario -->
        <form method="POST" action="../controlador/controladorInsertar.php" enctype="multipart/form-data">
            <input type="text" name="metodo" value="1" hidden>
            <div class="mb-3 ">
                <label class="form-label">Nombre del Libro</label>
                <input type="text" class="form-control" name="namefull" placeholder="ingrese el nombre" required>
            </div>

            <div class="mb-3 ">
                <label class="form-label">Autor</label>
                <input type="text" class="form-control" name="namefull" placeholder="ingrese el nombre" required>
            </div>
            <!--subir png-->

            <div class="mb-3">
                <label for="formFile" class="form-label">Portada del Libro</label>
                <input class="form-control" type="file" name="foto" accept="image/png,image/jpeg">
            </div>


            <div class="d-grid gap-2 col-12 mx-auto">
                <button type="submit" class="btn  btn btn-primary mt-3 mb-2" name="enviar">
                    Registrar nuevo Alumno
                </button>
            </div>

        </form>
    </div>

</div>

<?php
    echo $pie;
?>