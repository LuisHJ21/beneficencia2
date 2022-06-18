<?php

namespace App\Controllers;
use CodeIgniter\Controller;

use App\Models\UsuariosModel;


class Login extends BaseController
{
	protected $usuario;

	public function __construct()
	{
		$this->usuario=new UsuariosModel();
	}

	public function index()
	{
		
		$session=session();
        if($session->nombres)
        {
            return redirect()->to(base_url('admin/dashboard'));
        }
        else{
            echo view('administracion/login');
        }
	}

	public function login()
    {
        $usuario=$this->request->getPost('usuario');
        $contraseña=$this->request->getPost('contraseña');


        $bdusuario=$this->usuario->where('nombre_usuario',$usuario)->where('estado','Activo')->first();
        

        if($bdusuario!=null)
        {
            $contraseñadb=$bdusuario['contraseña'];
            if(password_verify($contraseña,$contraseñadb))
            {
                $datossesion=
                [
                    'id'=>$bdusuario['id_usuario'],
                    'nombres'=>$bdusuario['nombres'],
					'apellidos'=>$bdusuario['apellidos'],
					'sexo'=>$bdusuario['sexo'],
                    'usuario'=>$bdusuario['nombre_usuario']
                ];

                $session=session();
                $session->set($datossesion);

                return redirect()->to(base_url('admin/dashboard'));
            }
            else
            {
                $error['mensaje']="Contraseña Incorrecta";
                echo view('administracion/login',$error);
            }
        }
        else
        {
            $error['mensaje']="Usuario no Registrado";
            echo view('administracion/login',$error);
        }


    }

	public function logout()
    {
        $session=session();
        $session->destroy();
        return redirect()->to(base_url('admin/login'));

    }


}
