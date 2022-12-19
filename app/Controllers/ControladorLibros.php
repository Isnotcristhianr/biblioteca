<?php

namespace App\Controllers;

use App\Models\ModeloEstudiantes;
use CodeIgniter\Controller;
use App\Models\ModeloLibros;

class ControladorLibros extends Controller
{
    public function listarLibros()
    {
        /* importar header */
        $datos['cabecera'] = view('templates/encabezado.php');
        $datos['pie'] = view('templates/pie.php');

        /* objeto modelo libros */
        $objModeloLibros = new ModeloLibros();
        //                  consulta select
        $datos['libro'] = $objModeloLibros->findAll();

        return view('/libros/listarLibros', $datos);
    }

    public function crearLibro()
    {
        /* importar header */
        $datos['cabecera'] = view('templates/encabezado.php');
        $datos['pie'] = view('templates/pie.php');

        return view('/libros/crearLibro', $datos);
    }

    //add

    public function inicio()
    {
        /* importar header */
        $datos['cabecera'] = view('templates/encabezado.php');
        $datos['pie'] = view('templates/pie.php');

        return view('/libros/inicio', $datos);
    }


    public function listarEstudiantes()
    {


        /* importar header */
        $datos['cabecera'] = view('templates/encabezado.php');
        $datos['pie'] = view('templates/pie.php');

        /* objeto modelo libros */
        $objModeloEstudiantes = new ModeloEstudiantes();
        //                  consulta select
        $datos['estudiante'] = $objModeloEstudiantes->findAll();

        return view('/libros/listarEstudiantes', $datos);
    }

    public function crearEstudiantes()
    {

            /* importar header */
            $datos['cabecera'] = view('templates/encabezado.php');
            $datos['pie'] = view('templates/pie.php');

            return view('/libros/crearEstudiantes', $datos);
        
    }

    //add
    public function addEstudiante(){
        if ($_POST) {
            print_r($_POST);
             $datos = [
                 'nombre' => $_POST['nombre'],
                 'cedula' => $_POST['cedula'],
                 'edad' => $_POST['edad'],
                 'genero' => $_POST['genero'],
                 'img' => $_POST['img']
             ];
             $objModeloEstudiantes = new ModeloEstudiantes();
             $objModeloEstudiantes->crearEstudiantes($datos);
             //insertar datos
             return redirect()->to(base_url() . '/listarEstudiantes');
         }
    }

    public function relaciones()
    {
        /* importar header */
        $datos['cabecera'] = view('templates/encabezado.php');
        $datos['pie'] = view('templates/pie.php');

        return view('/libros/relaciones', $datos);
    }
}
