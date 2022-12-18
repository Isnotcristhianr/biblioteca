<?php 
namespace App\Models;

use CodeIgniter\Model;

class ModeloEstudiantes extends Model{
    protected $table      = 'tblestudiantes';
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';
    protected $primaryKey     = 'isEstudiante';
    protected $allowedFields = ['nombre', 'cedula', 'edad', 'genero', 'img'];

    public function listarEstudiantes(){
        $estudiantes = $this->findAll();
        return $estudiantes;
    }

    public function crearEstudiantes($datos){
        $this->save($datos);
    }

    public function eliminarEstudiantes($id){
        $this->where('isEstudiante', $id);
        $this->delete();
    }

    public function obtenerEstudiantes($id){
        $this->where('isEstudiante', $id);
        $estudiante = $this->first();
        return $estudiante;
    }

    public function actualizarEstudiantes($datos, $id){
        $this->where('isEstudiante', $id);
        $this->set($datos);
        $this->update();
    }
}


