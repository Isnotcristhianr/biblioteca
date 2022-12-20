<?php 
namespace App\Controllers;

use App\Models\ModeloRelaciones;
use CodeIgniter\Controller;

class ControladorRelaciones extends Controller{


    //funcion que importa css y js
    public function index()
    {
        $this->load->helper('url');
        $this->load->view('test');
    }

    public function relaciones()
    {
        /* importar header */
        $datos['cabecera'] = view('templates/encabezado.php');
        $datos['pie'] = view('templates/pie.php');

        return view('/libros/relaciones', $datos);
    }
}