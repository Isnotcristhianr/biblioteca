<?php 
namespace App\Models;

use CodeIgniter\Model;

class ModeloEstudiantes extends Model{
    protected $table      = 'tblestudiantes';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'isEstudiante';
    protected $allowedFields = ['nombre', 'cedula', 'edad', 'genero'];

  
    public function insertar($datos){
        $valor=$this->db->table("tblestudiantes");
        $valor->insert($datos);

        return $this->db->insertID();
    }

    public function obtenerNombre($data){
        $valor=$this->db->table('estudiantes');
        $valor->where($data);

        return $valor->get()->getResultArray();
    }

    public function actualizar($data, $id){
        $valor=$this->db->table('estudiantes');
        $valor->set($data);
        $valor->where('id', $id);

        return $valor->update();
    }

    public function eliminar($datos){
        $valor=$this->db->table('estudiantes');
        $valor->where($datos);
        return $valor->delete();
    }
}
?>