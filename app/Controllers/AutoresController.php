<?php
namespace App\Controllers;
use App\Models\AutoresModel;

class AutoresController extends BaseController
{
    public function listar()
    {
        $autorModel = new AutoresModel();
        $datos['autores'] = $autorModel->findAll();

        return view('autores/index', $datos);
    }

    public function crear()
    {
        return view('autores/crear');
    }

    public function guardar()
    {
        $autorModel = new AutoresModel();
        $datos = [
            'apellido' => $this->request->getPost('apellido'),
            'nombre' => $this->request->getPost('nombre'),
            'nacionalidad' => $this->request->getPost('nacionalidad'),
        ];
        $autorModel->insert($datos);
        return redirect()->to(base_url('autores/listar'))->with('mensaje', 'agregado');
    }

    public function editar($id)
    {
        $autorModel = new AutoresModel();
        $datos['autor'] = $autorModel->find($id);

        return view('autores/editar', $datos);
    }

    public function actualizar($id)
    {
        $autorModel = new AutoresModel();
        $datos = [
            'apellido' => $this->request->getPost('apellido'),
            'nombre' => $this->request->getPost('nombre'),
            'nacionalidad' => $this->request->getPost('nacionalidad'),
        ];
        $autorModel->update($id, $datos);
        return redirect()->to(base_url('autores/listar'))->with('mensaje', 'actualizado');
    }

    public function eliminar($id)
    {
        $autorModel = new AutoresModel();
        $autorModel->delete($id);
        return redirect()->to(base_url('autores/listar'))->with('mensaje', 'eliminado');
    }
}
