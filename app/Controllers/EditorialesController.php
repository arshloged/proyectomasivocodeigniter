<?php
namespace App\Controllers;
use App\Models\EditorialesModel;

class EditorialesController extends BaseController
{
    public function listar()
    {
        $editorialModel = new EditorialesModel();
        $datos['editoriales'] = $editorialModel->findAll();

        return view('editoriales/index', $datos);
    }

    public function crear()
    {
        return view('editoriales/crear');
    }

    public function guardar()
    {
        $editorialModel = new EditorialesModel();
        $datos = [
            'nombre' => $this->request->getPost('nombre'),
            'direccion' => $this->request->getPost('direccion'),
            'telefono' => $this->request->getPost('telefono'),
            'email' => $this->request->getPost('email'),
        ];
        $editorialModel->insert($datos);
        return redirect()->to(base_url('editoriales/listar'))->with('mensaje', 'agregado');
    }

    public function editar($id)
    {
        $editorialModel = new EditorialesModel();
        $datos['editorial'] = $editorialModel->find($id);

        return view('editoriales/editar', $datos);
    }

    public function actualizar($id)
    {
        $editorialModel = new EditorialesModel();
        $datos = [
            'nombre' => $this->request->getPost('nombre'),
            'direccion' => $this->request->getPost('direccion'),
            'telefono' => $this->request->getPost('telefono'),
            'email' => $this->request->getPost('email'),
        ];
        $editorialModel->update($id, $datos);
        return redirect()->to(base_url('editoriales/listar'))->with('mensajes', 'nueva info agregada');
    }

    public function eliminar($id)
    {
        $editorialModel = new EditorialesModel();
        $editorialModel->delete($id);
        return redirect()->to(base_url('editoriales/listar'))->with('mensaje', 'se jue');
    }
}
