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
            'nombre' => $this->request->getPost('txt_nombre')
        ];

        $gradosModel->insert($datos);

return redirect()->to(base_url('grados'))->with('agregado', 'se agregó estafa educacional');
    }

    
    public function editarGrado($codigo)
    {
        $gradosModel = new GradosModel();

        $datos['grado'] = $gradosModel->find($codigo);
        
        return view('grados_editar', $datos);
    }

public function actualizarGrado($codigo)
{
    $gradosModel = new GradosModel();

    $datos = [
        'nombre' => $this->request->getPost('txt_nombre')
    ];

    $gradosModel->update($codigo, $datos);

    return redirect()->to(base_url('grados'))->with('mensaje','se cambió lo que cambiaste');
}



   public function eliminarGrado($codigo)
{
    $gradoModel = new GradosModel();
    
    $gradoModel->where('codigo_grado', $codigo)->delete();
    
    return redirect()->to(base_url('grados'))
                     ->with('eliminado', 'el grado fue removido');
}

}