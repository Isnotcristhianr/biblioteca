<?php

namespace Config;

use CodeIgniter\Config\BaseService;

/**
 * Services Configuration file.
 *
 * Services are simply other classes/libraries that the system uses
 * to do its job. This is used by CodeIgniter to allow the core of the
 * framework to be swapped out easily without affecting the usage within
 * the rest of your application.
 *
 * This file holds any application-specific services, or service overrides
 * that you might need. An example has been included with the general
 * method format you should use for your service methods. For more examples,
 * see the core Services file at system/Config/Services.php.
 */
class Services extends BaseService
{
    /*
     * public static function example($getShared = true)
     * {
     *     if ($getShared) {
     *         return static::getSharedInstance('example');
     *     }
     *
     *     return new \CodeIgniter\Example();
     * }
     */

     //validar usuarios y contraseña api
     /*    public static function validarUsuario($getShared = true)
        {
            if ($getShared) {
                return static::getSharedInstance('validarUsuario');
            }
    
            return new \App\Controllers\ControladorSesiones();
        }

        //consumir api
        public static function curlrequest($getShared = true)
        {
            if ($getShared) {
                return static::getSharedInstance('curlrequest');
            }
    
            return new \CodeIgniter\HTTP\CURLRequest("https://proyectomontesdeoca.000webhostapp.com/webs/API_LOGIN/servicios/api.php");
        }

        //leer rol
        public static function leerRol($getShared = true)
        {
            if ($getShared) {
                return static::getSharedInstance('leerRol');
            }
    
            return new \App\Controllers\ControladorSesiones();
        } */

}
