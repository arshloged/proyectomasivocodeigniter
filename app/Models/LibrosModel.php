<?php

namespace App\Models;

use CodeIgniter\Model;

class LibrosModel extends Model
{
    protected $table = 'libros';
    protected $primaryKey = 'codigo_libro';
    protected $allowedFields = [
        'titulo', 
        'codigo_editorial', 
        'codigo_autor', 
        'anio_publicacion', 
        'estado'
    ];
}