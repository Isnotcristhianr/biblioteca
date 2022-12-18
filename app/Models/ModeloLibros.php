<?php 
namespace App\Models;

use CodeIgniter\Model;

class ModeloLibros extends Model{
    protected $table      = 'libros';
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';
    protected $primaryKey     = 'idLibro';
    protected $allowedFields = ['titulo', 'autor'];
}