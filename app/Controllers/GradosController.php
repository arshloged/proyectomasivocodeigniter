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
    // AÑADE ESTA LÍNEA AQUÍ PARA VER LOS DATOS
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
}