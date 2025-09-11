<?php

namespace App\Controllers;
use App\Models\EstudiantesModel;
use App\Models\GradosModel;

class EstudiantesController extends BaseController
{
    public function index(): string
    {
        $estudiantes = new EstudiantesModel();
        
        $db=\Config\Database::connect();
        $builder = $db->table('estudiantes');
        $builder->select('estudiantes.*, grados.nombre as grado');
        $builder->join('grados', 'estudiantes.codigo_grado = grados.codigo_grado');
        $query = $builder->get();

        $datos['datosEstudiantes']=$query;

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
   
        try {
            $estudiante = new EstudiantesModel();
        $estudiante->insert($datos);
        return redirect()->back()->with('agregado','Estudiantin registradin');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','El carnet ya existe, duh');
        }
    }

    public function editarEstudiante($id){

        $id = $this->request->getPost('id');
        
        $datos=[
            'carne_alumno'=>$this->request->getPost('txt_carnet'),
            'nombre'=>$this->request->getPost('txt_nombre'),
            'apellido'=>$this->request->getPost('txt_apellido'),
            'direccion'=>$this->request->getPost('txt_direccion'),
            'telefono'=>$this->request->getPost('txt_telefono'),
            'email'=>$this->request->getPost('txt_email'),
            'fechanacimiento'=>$this->request->getPost('txt_fecha_nac'),
            'codigo_grado'=>$this->request->getPost('lst_grado')
        ];

        try {
            $estudiante = new EstudiantesModel();
            $estudiante->update($id, $datos);
            return redirect()->to(base_url('estudiantes'))->with('agregado','Estudiantin Actualizadin');
        }catch (\Throwable $hh) {
            return redirect()->back()->with('error','error tremendo de usuario');
        }


    }


        /*$estudiante = new EstudiantesModel();
        $estudiante->insert($datos);
        return redirect()->route('estudiantes');*/



    
    public function buscarEstudiante($carnet){
        $estudiante = new EstudiantesModel();
        $datos['datosEstudiante']=$estudiante->where('carne_alumno', $carnet)->first();
      
        $grados = new GradosModel();
        $datos['datosGrados']=$grados->findAll();
        
        return view('from_modificar_estudiante',$datos);

    }

      public function eliminarEstudiante($carnet)
{
    $estudianteModel = new EstudiantesModel();
    
    $estudianteModel->where('carne_alumno', $carnet)->delete();
    
    return redirect()->to(base_url('estudiantes'))
                     ->with('eliminado', 'Estudiante eliminado correctamente');
}

}
