<?php

namespace App\Models;

use CodeIgniter\Model;

class AutoresModel extends Model
{
    protected $table = 'autores';
    protected $primaryKey = 'codigo_autor';
    protected $allowedFields = ['apellido', 'nombre', 'nacionalidad'];
}