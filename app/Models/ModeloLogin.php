<?php 
namespace App\Models;

use CodeIgniter\Model;

class ModeloLogin extends Model{
    protected $table      = 'tbllogin';
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';

    //validar usuario
    public function validarUsuario($user, $pass){
        $db = \Config\Database::connect();
        $builder = $db->table('tbllogin');
        $builder->where('user', $user);
        $builder->where('pass', $pass);
        $
        $query = $builder->get();
        return $query->getRow();
    }

    //validar usuario con api
    public function validarUsuarioApi($user, $pass){
        $peticion = \Config\Services::curlrequest();
        $respuesta = $peticion->request('GET', 'https://proyectomontesdeoca.000webhostapp.com/webs/API_LOGIN/servicios/api.php', [
            'form_params' => [
                'user' => $user,
                'pass' => $pass
            ]
        ]);
      //  return json_decode($respuesta->getBody(), true);
        $url = "https://proyectomontesdeoca.000webhostapp.com/webs/API_LOGIN/servicios/api.php";
        $json = file_get_contents($url);
        $datos = json_decode($json, true);
        return $datos;
    }

    //validar usuario con api otro decodificador
    public function validarUsuarioApi2($user, $pass){
        $peticion = \Config\Services::curlrequest();
        $respuesta = $peticion->request('GET', 'https://proyectomontesdeoca.000webhostapp.com/webs/API_LOGIN/servicios/api.php', [
            'form_params' => [
                'user' => $user,
                'pass' => $pass
            ]
        ]);

        $url = "https://proyectomontesdeoca.000webhostapp.com/webs/API_LOGIN/servicios/api.php";
        $json = file_get_contents($url);
        $datos = json_decode($json, true);
        return $datos;

    }

}