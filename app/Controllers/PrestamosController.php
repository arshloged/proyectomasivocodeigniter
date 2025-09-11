<?php

namespace App\Controllers;
use App\Models\PrestamosModel;
use App\Models\EstudiantesModel;
use App\Models\EmpleadosModel;
use App\Models\LibrosModel;


class PrestamosController extends BaseController
{
    public function index()
    {
        $prestamosModel = new PrestamosModel();

        $prestamos = $prestamosModel
            ->select('prestamos.*, estudiantes.nombre as nombre_estudiante, empleados.nombre as nombre_empleado, libros.titulo as titulo_libro')
            ->join('estudiantes', 'estudiantes.carne_alumno = prestamos.carne_alumno')
            ->join('empleados', 'empleados.codigo_empleado = prestamos.codigo_empleado')
            ->join('libros', 'libros.codigo_libro = prestamos.codigo_libro')
            ->findAll();

        $datos['prestamos'] = $prestamos;

        return view('prestamos', $datos);
    }
    
    public function anadirPrestamo()
    {
        $estudiantesModel = new EstudiantesModel();
        $empleadosModel = new EmpleadosModel();
        $librosModel = new LibrosModel();

        $datos['estudiantes'] = $estudiantesModel->findAll();
        $datos['empleados'] = $empleadosModel->findAll();
        $datos['libros'] = $librosModel->findAll();

        return view('prestamos_anadir', $datos);
    }

    public function guardarPrestamo()
    {
        $prestamosModel = new PrestamosModel();

        $datos = [
            'codigo_empleado'    => $this->request->getPost('lst_empleado'),
            'carne_alumno'       => $this->request->getPost('lst_estudiante'),
            'codigo_libro'       => $this->request->getPost('lst_libro'),
            'fecha_prestamo'     => $this->request->getPost('txt_fecha_prestamo'),
            'fecha_devolucion'   => $this->request->getPost('txt_fecha_devolucion'),
            
        ];

        $prestamosModel->insert($datos);
        return redirect()->to(base_url('prestamos'))->with('agregado', 'se presto el libro bonito');
    }

    public function editarPrestamo($numero_prestamo) 
    {
        $prestamosModel = new PrestamosModel();
        $estudiantesModel = new EstudiantesModel();
        $empleadosModel = new EmpleadosModel();
        $librosModel = new LibrosModel();

        $datos['prestamo'] = $prestamosModel->find($numero_prestamo); 
        $datos['estudiantes'] = $estudiantesModel->findAll();
        $datos['empleados'] = $empleadosModel->findAll();
        $datos['libros'] = $librosModel->findAll();

        return view('prestamos_editar', $datos);
    }

    public function actualizarPrestamo()
    {
        $prestamosModel = new PrestamosModel();
        
        $numero_prestamo = $this->request->getPost('txt_numero_prestamo'); 

        $datos = [
            'codigo_empleado'    => $this->request->getPost('lst_empleado'),
            'carne_alumno'       => $this->request->getPost('lst_estudiante'),
            'codigo_libro'       => $this->request->getPost('lst_libro'),
            'fecha_prestamo'     => $this->request->getPost('txt_fecha_prestamo'),
            'fecha_devolucion'   => $this->request->getPost('txt_fecha_devolucion'),
            
        ];

        $prestamosModel->update($numero_prestamo, $datos); 
        return redirect()->to(base_url('prestamos'))->with('actualizado', 'se hicieron cambios sospechosos');
    }

    public function eliminarPrestamo($numero_prestamo)
    {
        $prestamosModel = new PrestamosModel();
        $prestamosModel->delete($numero_prestamo); 
        return redirect()->to(base_url('prestamos'))->with('eliminado', 'se borró eso que borrastes');
    }
}