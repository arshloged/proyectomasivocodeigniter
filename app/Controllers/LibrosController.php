<?php

namespace App\Controllers;
use App\Models\LibrosModel;
use App\Models\EditorialesModel;
use App\Models\AutoresModel;
use App\Models\EstadosModel;

class LibrosController extends BaseController
{
    public function index()
    {
        $librosModel = new LibrosModel();

        $libros = $librosModel
            ->select('libros.*, autores.nombre as nombre_autor, editoriales.nombre as nombre_editorial, estados.nombre as nombre_estado')
            ->join('autores', 'autores.codigo_autor = libros.codigo_autor')
            ->join('editoriales', 'editoriales.codigo_editorial = libros.codigo_editorial')
            ->join('estados', 'estados.codigo_estado = libros.estado')
            ->findAll();

        $datos['libros'] = $libros;

        return view('libros/libros', $datos);
    }
    
    public function anadirLibro()
    {
        $editorialesModel = new EditorialesModel();
        $autoresModel = new AutoresModel();
        $estadosModel = new EstadosModel();

        $datos['editoriales'] = $editorialesModel->findAll();
        $datos['autores'] = $autoresModel->findAll();
        $datos['estados'] = $estadosModel->findAll();

        return view('libros/libros_anadir', $datos);
    }

    public function guardarLibro()
    {
        $librosModel = new LibrosModel();

        $datos = [
            'titulo' => $this->request->getPost('txt_titulo'),
            'codigo_editorial' => $this->request->getPost('lst_editorial'),
            'codigo_autor' => $this->request->getPost('lst_autor'),
            'precio' => $this->request->getPost('txt_precio'),
            'estado' => $this->request->getPost('lst_estado')
        ];

        $librosModel->insert($datos);
        return redirect()->to(base_url('libros'))->with('agregado', 'se agrego algo bonito a la basesita de datos');
    }

   public function editarLibro($codigo)
    {
        $librosModel = new LibrosModel();
        $editorialesModel = new EditorialesModel();
        $autoresModel = new AutoresModel();
        $estadosModel = new EstadosModel();

        $datos['libro'] = $librosModel->find($codigo);
        $datos['editoriales'] = $editorialesModel->findAll();
        $datos['autores'] = $autoresModel->findAll();
        $datos['precio'] = $librosModel->findAll();
        $datos['estados'] = $estadosModel->findAll();

        return view('libros/libros_editar', $datos);
    }

    public function actualizarLibro($codigo)
    {
        $librosModel = new LibrosModel();
        
        $codigo = $this->request->getPost('txt_codigo_libro');

        $datos = [
            'titulo' => $this->request->getPost('txt_titulo'),
            'codigo_editorial' => $this->request->getPost('lst_editorial'),
            'codigo_autor' => $this->request->getPost('lst_autor'),
            'precio' => $this->request->getPost('txt_precio'),
            'estado' => $this->request->getPost('lst_estado')
        ];

        $librosModel->update($codigo, $datos);
        return redirect()->to(base_url('libros'))->with('actualizado', 'cambiando cosas como siempre');
    }

    public function eliminarLibro($codigo)
    {
        $librosModel = new LibrosModel();
        $librosModel->delete($codigo);
        return redirect()->to(base_url('libros'))->with('eliminado', 'se borraron los poemas de amor');
    }
}