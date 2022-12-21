<?php 
namespace App\Models;

use CodeIgniter\Model;

class ModeloLogin extends Model{
    protected $table      = 'tbllogin';
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';

    //validar usuario

    public function obtenerUsuario($data){
        $db = \Config\Database::connect();
        $Usuario = $db->table('tbllogin');
        $Usuario->where($data);

        return $Usuario->get()->getResultArray();
    }

   // funcion obtener datos api


    //validar usuario con api
    public function xd($data){
        $peticion = \Config\Services::curlrequest();
      //  return json_decode($respuesta->getBody(), true);
      $datos['users']=json_decode(file_get_contents('https://proyectomontesdeoca.000webhostapp.com/webs/API_LOGIN/servicios/api.php'),true);
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