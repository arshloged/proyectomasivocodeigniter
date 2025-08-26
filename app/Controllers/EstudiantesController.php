<?php

namespace App\Controllers;
use App\Models\EstudiantesModel;
use App\Models\GradosModel;

class EstudiantesController extends BaseController
{
    public function index(): string
    {
        //crear un objeto de tipo EstudiantesModel
        $estudiantes = new EstudiantesModel();
        
        $db=\Config\Database::connect();
        $builder = $db->table('estudiantes');
        $builder->select('estudiantes.*, grados.nombre as grado');
        $builder->join('grados', 'estudiantes.codigo_grado = grados.codigo_grado');
        $query = $builder->get();

        $datos['datosEstudiantes']=$query;

        //crear un objeto de tipo GradoModel
        $grados = new GradosModel();
        $datos['datosGrados']=$grados->findAll();
        
        return view('estudiantes',$datos);
    }
    public function agregarEstudiante(){
        $datos=[
            'carne_alumno'=>$this->request->getPost('txt_carnet'),
            'nombre'=>$this->request->getPost('txt_nombre'),
            'apellido'=>$this->request->getPost('txt_apellido'),
            'direccion'=>$this->request->getPost('txt_direccion'),
            'telefono'=>$this->request->getPost('txt_telefono'),
            'email'=>$this->request->getPost('txt_email'),
            'fechanacimiento'=>$this->request->getPost('txt_fecha_nac'),
            'codigo_grado'=>$this->request->getPost('lst_grado'),
        ];
        //print_r ($datos);
        $estudiante = new EstudiantesModel();
        $estudiante->insert($datos);
        return redirect()->route('estudiantes');
    }
}
