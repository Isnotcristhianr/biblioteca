<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ModeloLibros;

class ControladorLibros extends Controller
{
    //funcion que importa css y js
    public function index(){
        $this->load->helper('url');
        $this->load->view('test');
    }

    public function inicio()
    {
        /* importar header */
        $datos['cabecera'] = view('templates/encabezado.php');
        $datos['pie'] = view('templates/pie.php');

        return view('/libros/inicio', $datos);
    }
    //FUNCION PARA VER LOS LIBROS
    public function ListarLibros(){

        $datos['cabecera']=view('/templates/encabezado.php');
        $datos['pie']=view('/templates/pie.php');

        $objLibro=new ModeloLibros();

        $datos['libros']=$objLibro->findAll();

        return view('/libros/ListarLibros', $datos);
    }
    //FUNCION PARA DESTINAR LA PAGINA INGRESAR LIBROS
    public function CrearLibros(){

        $datos['cabecera']=view('/templates/encabezado.php');
        $datos['pie']=view('/templates/pie.php');

        return view('/libros/CrearLibros', $datos);
    }
    //FUNCION O METODO QUE PERMITE INGRESAR LOS VALORES
    public function ingresar(){
        $datos=[
                    "titulo"=>$_POST['titulo'],
                    "autor"=>$_POST['autor'],
        ];
        $objLibro=new ModeloLibros();
        $respuesta = $objLibro->insert($datos);

        if($respuesta>0){
            return redirect()->to(base_url('/ListarLibros'));
                
        }else{
            return redirect()->to(base_url('/CrearLibros'));
        }
    }
    //FUNCION QUE PERMITE HACER UN SELECT DE ID PARA ACTUALIZAR
    public function obtenerNombre($id){
        $data=['idLibro' => $id];
        $objLibro=new ModeloLibros();
        $respuesta =$objLibro->obtenerNombre($data);

        $datos=[
            "datos" => $respuesta
        ];

        $datos['cabecera']=view('/templates/encabezado.php');
        $datos['pie']=view('/templates/pie.php');

        return view('/libros/ActualizarLibros', $datos);
    }
    //FUNCION ACTUALIZAR
    public function actualizar(){
        $datos = [
            "titulo" => $_POST['titulo'],
            "autor" => $_POST['autor'],
        ];
        $id = $_POST['idLibro'];
        $objLibro = new ModeloLibros();
        $respuesta = $objLibro->actualizar($datos, $id);

        if($respuesta){
            return redirect()->to(base_url('/ListarLibros'));     
        }else{
            echo('<script>
                alert("Error, no se puedo actualizar");
            </script>');
        }
    }
    //FUNCION ELIMINAR
    public function eliminar($id){
        $objLibro = new ModeloLibros();
        $datos=[
            "idLibro" => $id
        ];
        $respuesta = $objLibro->eliminar($datos);

        if($respuesta){
            return redirect()->to(base_url('/ListarLibros'));     
        }else{
            echo('<script>
                alert("Error, no se puedo eliminar");
            </script>');
        }
    }

}