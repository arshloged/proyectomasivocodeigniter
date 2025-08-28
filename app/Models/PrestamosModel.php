<?php

namespace App\Models;

use CodeIgniter\Model;

class PrestamosModel extends Model
{
    protected $table         = 'prestamos';
    protected $primaryKey    = 'numero_prestamo'; 
    protected $allowedFields = [
        'codigo_empleado', 
        'carne_alumno', 
        'codigo_libro', 
        'fecha_prestamo', 
        'fecha_devolucion', 
        'observaciones'
    ];
}