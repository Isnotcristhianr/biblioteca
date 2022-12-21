<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class SessionSecre implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {

      /*   $session = session();
        $rol = $session->get('rol');

        if ($rol != 'secretaria') {
            return redirect()->to(base_url() . '/login');
        } */
      
      

    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        
    }
}