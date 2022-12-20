<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class ControladorSesiones extends Controller{

    public function usuarios()
    {
        $datos['cabecera'] = view('templates/encabezado.php');
        $datos['pie'] = view('templates/pie.php');

        return view('/libros/usuarios', $datos);
    }

    public function sesion()
    {
        $datos['cabecera'] = view('templates/encabezado.php');
        $datos['pie'] = view('templates/pie.php');

        return view('/sesion/login', $datos);
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

    //sesiones consumiendo api
    public function validarUsuario()
    {
        $sesion = session();
        $peticion = \Config\Services::curlrequest();
        $respuesta = $peticion->request('POST', 'https://proyectomontesdeoca.000webhostapp.com/webs/API_LOGIN/servicios/api.php', [
            'form_params' => [
                'user' => $this->request->$_POST('user'),
                'pass' => $this->request->$_POST('pass')
            ]
        ]);

        $url = "https://proyectomontesdeoca.000webhostapp.com/webs/API_LOGIN/servicios/api.php";
        $json = file_get_contents($url);
        $datos = json_decode($json, true);
        
       // $respuesta = json_decode($respuesta->getBody(), true);

        if($respuesta['status'] == 200){
            $sesion->set('usuario', $respuesta['data']);
            return redirect()->to(base_url().'/usuarios');
        }else{
            $sesion->setFlashdata('error', $respuesta['data']);
            return redirect()->to(base_url().'/login');
        }
    }

    //validar sesion con api y modelos
    public function validarUsuario2()
    {
        $sesion = session();
        //recibir user y pass
        $user = $this->request->$_POST('user');
        $pass = $this->request->$_POST('pass');

        $modelo = new \App\Models\ModeloLogin();

        $respuesta = $modelo->validarUsuarioApi2($user, $pass);

        if($respuesta){
            $sesion->set('usuario', $respuesta);
            return redirect()->to(base_url().'/inicio');
        }else{
            $sesion->setFlashdata('error', 'Usuario o contraseña incorrectos');
            return redirect()->to(base_url().'/login');
        }
    }

    public function cerrarSesion()
    {
        $sesion = session();
        $sesion->destroy();

        return redirect()->to(base_url().'/iniciarSesion');
    }
}