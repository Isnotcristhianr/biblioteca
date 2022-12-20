<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ModeloEstudiantes;

class ControladorEstudiantes extends Controller
{
    //funcion que importa css y js
    public function index()
    {
        $this->load->helper('url');
        $this->load->view('test');
    }

    public function CrearEstudiante()
    {

        $datos['cabecera'] = view('/templates/encabezado.php');
        $datos['pie'] = view('/templates/pie.php');

        return view('/estudiante/CrearEstudiante', $datos);
    }

    public function listarEstudiante()
    {
        $datos['cabecera'] = view('/templates/encabezado.php');
        $datos['pie'] = view('/templates/pie.php');

        $objEst = new ModeloEstudiantes();

        $datos['estudiantes'] = $objEst->findAll();

        return view('/estudiante/listarEstudiante', $datos);
    }
    //insert
    public function ingresarEst()
    {
        $datos = [
            "nombre" => $_POST['nombre'],
            "cedula" => $_POST['cedula'],
            "edad" => $_POST['edad'],
            "genero" => $_POST['genero'],
        ];
        $objEst = new ModeloEstudiantes();
        $respuesta = $objEst->insert($datos);

        if ($respuesta > 0) {
            return redirect()->to(base_url('/listarEstudiante'));
        } else {
            return redirect()->to(base_url('/CrearEstudiante'));
        }
    }
    //sacar id    
    public function obtenerNombreEst($id)
    {
        $data = ['isEstudiante' => $id];
        $objEst = new ModeloEstudiantes();
        $respuesta = $objEst->obtenerNombre($data);

        $datos = [
            "datos" => $respuesta
        ];

        $datos['cabecera'] = view('/templates/encabezado.php');
        $datos['pie'] = view('/templates/pie.php');

        return view('/estudiante/ActualizarEstudiante', $datos);
    }
    //update
    public function actualizarEst()
    {
        $datos = [
            "nombre" => $_POST['nombre'],
            "cedula" => $_POST['cedula'],
            "edad" => $_POST['edad'],
            "genero" => $_POST['genero'],
        ];
        $id = $_POST['isEstudiante'];
        $objEst = new ModeloEstudiantes();
        $respuesta = $objEst->actualizar($datos, $id);

        if ($respuesta) {
            return redirect()->to(base_url('/listarEstudiante'));
        } else {
            echo ('<script>
                alert("Error, no se puedo actualizar");
            </script>');
        }
    }
    //delete
    public function eliminarEst($id)
    {
        $objEst = new ModeloEstudiantes();
        $datos = [
            "isEstudiante" => $id
        ];
        $respuesta = $objEst->eliminar($datos);

        if ($respuesta) {
            return redirect()->to(base_url('/listarEstudiante'));
        } else {
            echo ('<script>
                alert("Error, no se puedo eliminar");
            </script>');
        }
    }
}
