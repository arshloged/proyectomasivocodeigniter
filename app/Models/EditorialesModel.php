<?php

namespace App\Models;

use CodeIgniter\Model;

class EditorialesModel extends Model
{
    protected $table = 'editoriales';
    protected $primaryKey = 'codigo_editorial';
    protected $allowedFields = ['nombre', 'telefono', 'direccion', 'email'];
}