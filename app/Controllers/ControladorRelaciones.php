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
        $datos['cabecera'] = view('templates/encabezado.php');
        $datos['pie'] = view('templates/pie.php');

        return view('/libros/relaciones', $datos);
    }

    public function api()
    {
        $datos['cabecera'] = view('templates/encabezado.php');
        $datos['pie'] = view('templates/pie.php');

        //consumir api
        $peticion = \Config\Services::curlrequest();
        $datos['users']=json_decode(file_get_contents('https://jsonplaceholder.typicode.com/posts/'),true);
        

        return view('/libros/api', $datos);
    }

    public function usuarios()
    {
        $datos['cabecera'] = view('templates/encabezado.php');
        $datos['pie'] = view('templates/pie.php');

        return view('/libros/usuarios', $datos);
    }

    //consumir api
    public function consumirApi()
    {
        $url = "https://jsonplaceholder.typicode.com/posts/";
        $json = file_get_contents($url);
        $datos = json_decode($json, true);
        $datos['cabecera'] = view('templates/encabezado.php');
        $datos['pie'] = view('templates/pie.php');
        return view('/libros/api', $datos);
    }
}