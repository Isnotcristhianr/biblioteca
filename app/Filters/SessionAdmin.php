<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Exception;

class SessionAdmin implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {

        try {
            //comprobar si sesion esta activa
            $session = session();
            $rol = $session->get('rol');

            if (session()->islogged) {
                return redirect()->to(base_url() . '/login');
            }

        } catch (\Exception $e) {
            return redirect()->to(base_url() . '/login');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
