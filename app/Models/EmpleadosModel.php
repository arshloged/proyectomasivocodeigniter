<?php

namespace App\Models;

use CodeIgniter\Model;

class EmpleadosModel extends Model
{
    protected $table = 'empleados';
    protected $primaryKey = 'codigo_empleado';
    protected $allowedFields = [
        'codigo_empleado','nombre', 'apellido', 'direccion', 'telefono', 'email', 'password','tipo_usuario'
    ];
}