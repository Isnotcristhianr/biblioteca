<?php

namespace App\Controllers;

use App\Models\ModeloLogin;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function ListarLibros()
    {
        return view('/libros/ListarLibros');
    }


    public function login2()
    {
        //recibir user y pass
        $user = $this->request->getPost('user');
        $pass = $this->request->getPost('pass');

        $Usuario = new ModeloLogin();

        $datosUsuario = $Usuario->obtenerUsuario(['user' => $user]);
        $datosUsuario= $Usuario->obtenerUsuario(['pass' => $pass]);

        if (count($datosUsuario) > 0) {

            $data = [
                'user' => $datosUsuario[0]['user'],
                'rol' => $datosUsuario[0]['rol'],                
            ];

            $sesion = session();
            $sesion->set($data);

            if($datosUsuario[0]['rol']=='administrador'){
                return redirect()->to(base_url() . '/inicio');
            }else if($datosUsuario[0]['rol']=='secretaria'){
                return redirect()->to(base_url() . '/inicioSecre');
            }
        } else {

            return redirect()->to(base_url() . '/login');
        }
    }
}
