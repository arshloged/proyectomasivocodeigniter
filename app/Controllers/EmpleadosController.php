<?php

namespace App\Controllers;
use App\Models\EmpleadosModel;

class EmpleadosController extends BaseController
{
    
    public function index()
    {
        $empleados = new EmpleadosModel();
        
        $usuario = $this->request->getPost('txt_usuario');
        $pass = $this->request->getPost('txt_password');

        $datos = $empleados->where('codigo_empleado',$usuario)->where('password',$pass)->first();

        if($datos){
            echo("tipo de usuario: ". $datos['tipo_usuario']);
            if($datos['tipo_usuario']==1){
                $ubicacion="menu_admin";
            }elseif ($datos['tipo_usuario']==2){
                $ubicacion="menu_maestro";
            }elseif($datos['tipo_usuario']==3){
                $ubicacion="menu_biblio";
            }else{
                //return redirect()->route('/');
                return redirect()->back()->withInput()->with('errors','Usuario sin acceso');
            }
        }else{
            echo ("datos incorrectos");
            //return redirect()->route('/');
            return redirect()->back()->withInput()->with('errors','Datos incorrectos');
        }
        return view($ubicacion);
    }
    
    
}