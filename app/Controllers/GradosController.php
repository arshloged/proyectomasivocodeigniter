<?php

namespace App\Controllers;
use App\Models\GradosModel;

class GradosController extends BaseController
{
    public function index()
    {
        $gradosModel = new GradosModel();
        
        $datos['datosGrados'] = $gradosModel->findAll();
        
        return view('grados', $datos);
    }

    public function agregarGrado()
    {
        $gradosModel = new GradosModel();

        $datos = [
            'codigo_grado' => $this->request->getPost('txt_codigo'),
            'nombre'       => $this->request->getPost('txt_nombre')
        ];

        $gradosModel->insert($datos);

        return $this->response->redirect(base_url('grados'));
    }

    
    public function editarGrado($codigo)
    {
        $gradosModel = new GradosModel();

        $datos['grado'] = $gradosModel->find($codigo);
        
        return view('grados_editar', $datos);
    }

  public function actualizarGrado()
{
    dd($this->request->getPost()); 

    $gradosModel = new GradosModel();

    $codigo = $this->request->getPost('txt_codigo');
    $nombre = $this->request->getPost('txt_nombre');
    
    $datos = [
        'nombre' => $nombre
    ];

    $gradosModel->update($codigo, $datos);

    return $this->response->redirect(base_url('grados'));
}

   public function eliminarGrado($codigo)
{
    $gradoModel = new EstudiantesModel();
    
    $gradoModel->where('codigo_grado', $codigo)->delete();
    
    return redirect()->to(base_url('grados'))
                     ->with('eliminado', 'Grado eliminado correctamente');
}

}