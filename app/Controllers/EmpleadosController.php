<?php

namespace App\Controllers;
use App\Models\EmpleadosModel;

class EmpleadosController extends BaseController
{
    public function listar()
{

    
    $empleadoModel = new EmpleadosModel();


    
    $datos['empleados'] = $empleadoModel->findAll(); 

    return view('empleados/index', $datos);
}

    public function index()
    {
        $empleados = new EmpleadosModel();
        
        $usuario = $this->request->getPost('txt_usuario');
        $pass = $this->request->getPost('txt_password');

        $datos = $empleados->where('codigo_empleado',$usuario)->where('password',$pass)->first();

        if($datos){
            echo("tipo de usuario: ". $datos['tipo_usuario']);
            if($datos['tipo_usuario']==1){
            return redirect()->to(base_url('empleados/listar'));
            }elseif ($datos['tipo_usuario']==2){
                $ubicacion="menu_maestro";
            }elseif($datos['tipo_usuario']==3){
                $ubicacion="menu_biblio";
            }else{
                return redirect()->back()->withInput()->with('errors','Usuario sin acceso');
            }
        }else{
            echo ("datos incorrectos");
            return redirect()->back()->withInput()->with('errors','Datos incorrectos');
        }
        return view($ubicacion);
    }

    public function editar($id)
    {
        $empleadoModel = new EmpleadosModel();
        $datos['empleado'] = $empleadoModel->find($id);

        return view('empleados/editar', $datos);
    }

    public function actualizar($id)
    {
        $empleadoModel = new EmpleadosModel();
                $id = $this->request->getPost('id');


        $datos = [
            'nombre'       => $this->request->getPost('nombre'),
            'apellido'     => $this->request->getPost('apellido'),
            'direccion'    => $this->request->getPost('direccion'),
            'email'        => $this->request->getPost('email'),
            'tipo_usuario' => $this->request->getPost('tipo_usuario'),
        ];

        if ($this->request->getPost('password')) {
            $datos['password'] = password_hash($this->request->getPost('password'), PASSWORD_BCRYPT);
        }

        $empleadoModel->update($id, $datos);
        return redirect()->to(base_url('empleados/listar'));
    }

    public function eliminar($id)
    {
        $empleadoModel = new EmpleadosModel();
        $empleadoModel->delete($id);

        return redirect()->to(base_url('empleados'));
    
    }

public function crear()
{
    return view('empleados/crear');
}

public function guardar()
{
    $empleadoModel = new EmpleadosModel();

    $datos = [
        'nombre'       => $this->request->getPost('nombre'),
        'apellido'     => $this->request->getPost('apellido'),
        'direccion'    => $this->request->getPost('direccion'),
        'email'        => $this->request->getPost('email'),
        'password'     => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
        'tipo_usuario' => $this->request->getPost('tipo_usuario'),
    ];

    $empleadoModel->insert($datos);
    return redirect()->to(base_url('empleados/listar'));
}

}
    
    